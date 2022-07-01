<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use DB;
use Cache;
use Symfony\Component\DomCrawler\Crawler as DomCrawler;

class UniGenReset extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'unigen:blade';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generat full app';
    protected $common_models = [];
    protected $models = [];
    protected $snippets = [];
    protected $snippets_page = [];
    protected $replacements = [];
    protected $deletefiles = [];
    protected $appName = 'App';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $this->replceSnippets();
        // $this->replcaDuplicatedSnippets(false);
        $this->autoCreatePartials();
        // $this->copyHtmlToBladeFiles();

        // $this->replaceNodeWithInclode();
    }

    public function replceSnippets()
    {
        $snippets_map = $this->mapSnippets();
        $bar = $this->output->createProgressBar(count($snippets_map));
        $bar->start();
        foreach ($snippets_map as $snippet) {
            $main_sfile = base_path('resources/views/porto/partials/' . $snippet['file'] . '.php');
            $main_sfile_content = file_get_contents("$main_sfile");
            if (strpos($main_sfile_content, '{{$post') === false) {
                $main_document = new DomCrawler($main_sfile_content);
                foreach ($snippet['data'] as $key => $data) {
                    $data = explode('|', $data);
                    if (isset($data[1])) {
                        switch ($data[1]) {
                            case 'href':
                                $item = $main_document->filter($data[0])->attr('href');
                                break;
                            default:
                                $item = $main_document->filter($data[0])->attr($data[1]);
                                break;
                        }
                    } else {
                        $item = $main_document->filter($data[0])->text();
                    }

                    $main_sfile_content = str_replace($item, '{{$post->' . $key . '}}',  $main_sfile_content);
                }


                $blade_dir = base_path('resources/views/porto/partials/' . $snippet['folder']);

                foreach (glob("$blade_dir/*") as $key => $file) {
                    $content = file_get_contents("$file");
                    if (strpos($content, '{{$post') === false) {
                        try {
                            $b = str_replace('C:\Wnmp\html\unigenv\resources/views/porto/partials/', '', $file);
                            $b  = str_replace('.blade.php', '', $b);
                            $b  = str_replace('/', '.', $b);
                            $file_include = "@include('porto.partials."  . $b . "')";
                            $file_name = str_replace('C:\Wnmp\html\unigenv\resources', '', $file);
                            $snippets_key = $b;
                            $result = [];

                            $document = new DomCrawler($content);
                            foreach ($snippet['data'] as $key => $data) {
                                $data = explode('|', $data);
                                if (isset($data[1])) {
                                    switch ($data[1]) {
                                        case 'href':
                                            $item = $document->filter($data[0])->attr('href');
                                            break;
                                        default:
                                            $item = $document->filter($data[0])->attr($data[1]);
                                            break;
                                    }
                                } else {
                                    $item = $document->filter($data[0])->text();
                                }

                                $content = str_replace($item, '{{$post->' . $key . '}}',  $content);

                                $result[$key] = $item;
                            }

                            $main_sfile_content_s = preg_replace('/\s+/S', " ", $main_sfile_content);
                            $content_s = preg_replace('/\s+/S', " ", $content);

                            if ($main_sfile_content_s == $content_s) {
                                DB::table('snippets_post')->insert([
                                    'key' => $snippets_key,
                                    'data' => json_encode($result),
                                ]);
                                $main_file_name = str_replace('C:\Wnmp\html\unigenv\resources', '', $main_sfile);
                                // dd($main_file_name);
                                if ($file_name == $main_file_name ) {
                                    Storage::disk('resource')->put($file_name, $content);
                                } else {
                                    Storage::disk('resource')->delete($file_name);
                                }
                                $this->replaceIncludes($snippets_key, $snippet['file']);
                            }
                            
                        } catch (\Throwable $th) {
                            // throw $th;
                        }
                    }
                }
            }
            $bar->advance();
        }
        $bar->finish();
    }
    public function mapSnippets(){
        $array = [];
        $dir = base_path('storage/app/snippets_map');
        foreach (glob("$dir/*") as $file) {
            $content = file_get_contents("$file");
            $snippets_map = json_decode($content, true);
            $array = array_merge($array, $snippets_map);
        }
        return $array;
    }
    public function replaceIncludes($key, $main_file_name){
        $main_name = str_replace('.blade', '', $main_file_name);
        $main_name = str_replace('/', '.', $main_name);
        $old_include = "@include('porto.partials.".$key ."')";
        $new_include = "@include('porto.partials." . $main_name."', ['key' => '".$key."'])";

        $dir = base_path('resources/views/porto/blade');
        foreach (glob("$dir/*") as $file) {
            if (strpos($file, '.blade.php') !== false) {
                $content = file_get_contents("$file");
                $file_name = str_replace('C:\Wnmp\html\unigenv\resources', '', $file);
                $content = str_replace($old_include, $new_include,  $content);
                Storage::disk('resource')->put($file_name, $content);
            }
        }
    }
    public function replcaDuplicatedSnippets($rpl_DB)
    {
        $blade_dir = base_path('resources/views/porto/partials');
        foreach (glob("$blade_dir/*") as $dir) {
            foreach (glob("$dir/*") as $key => $file) {
                $content = file_get_contents("$file");
                foreach (glob("$dir/*") as  $keyb => $fileb) {
                    if (strpos($fileb, '.blade.php') !== false && $key > $keyb) {
                        $contentb = file_get_contents("$fileb");
                        if ($contentb == $content) {
                            $b = str_replace('C:\Wnmp\html\unigenv\resources/views/porto/partials/', '', $fileb);
                            $b  = str_replace('.blade.php', '', $b);
                            $b  = str_replace('/', '.', $b);
                            $replacement_old = "@include('porto.partials."  . $b . "')";

                            $a = str_replace('C:\Wnmp\html\unigenv\resources/views/porto/partials/', '', $file);
                            $a  = str_replace('.blade.php', '', $a);
                            $a  = str_replace('/', '.', $a);
                            $replacement_new = "@include('porto.partials."  . $a . "')";

                            $this->replacements[] =  [
                                'replacement_new' => $replacement_new,
                                'replacement_old' => $replacement_old,
                            ];

                            $this->deletefiles[] = $fileb;
                        }
                    }
                }
            }
        }


        $blade_dir = base_path('resources/views/porto/blade');
        $files = Storage::disk('resource')->files('/views/porto/blade');
        $bar = $this->output->createProgressBar(count($files));
        $bar->start();

        foreach (glob("$blade_dir/*") as $bfile) {
            if (strpos($bfile, '.blade.php') !== false) {

                $bcontent = file_get_contents("$bfile");
                $file_name = str_replace('C:\Wnmp\html\unigenv\resources', '', $bfile);

                foreach ($this->replacements as $breplacement) {

                    if (strpos($bcontent, $breplacement['replacement_old']) !== false) {
                        $this->snippets_page[] = [
                            'page' =>  $file_name,
                            'include' =>  $breplacement['replacement_old'],
                        ];
                    }

                    $bcontent = str_replace($breplacement['replacement_old'], $breplacement['replacement_new'],  $bcontent);
                }

                Storage::disk('resource')->put($file_name, $bcontent);
            }
            $bar->advance();
        }
        $bar->finish();

        // if ($rpl_DB) {

        //     foreach ($this->snippets_page as $sp_item) {
        //         // try {
        //         $page = DB::table('snippets_page')->where('page', $sp_item['page'])->first();
        //         if (is_null($page)) {
        //             $page_id = DB::table('snippets_page')->insertGetId(
        //                 ['page' => $sp_item['page']]
        //             );
        //         } else {
        //             $page_id = $page->id;
        //         }
        //         $post = DB::table('snippets_post')->where('include', $sp_item['include'])->first();

        //         DB::table('snippets_page_post')->insert([
        //             'post_id' => $post->id,
        //             'page_id' => $page_id,
        //         ]);
        //         // } catch (\Throwable $th) {
        //         //     //throw $th;
        //         // }
        //     }

        //     foreach ($this->replacements as $breplacement) {
        //         DB::table('snippets_post')->where('include', $breplacement['replacement_old'])->update([
        //             'include' => $breplacement['replacement_new'],
        //         ]);
        //     }
        // }

        foreach ($this->deletefiles as $deletefile) {

            try {
                $dfile_name = str_replace('C:\Wnmp\html\unigenv\resources', '', $deletefile);
                $dfile_nameb = str_replace('.blade.php', '.blade.pjp', $dfile_name);

                Storage::disk('resource')->move($dfile_name, $dfile_nameb);
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
    }

    public function autoCreatePartials()
    {
        $classes = json_decode(Storage::disk('local')->get('classes.json'), true);

        foreach ($classes as  $class) {
            if (isset($class['class'])) {
                $class_name = $class['class'];
                $type = '.';
            } else {
                $class_name = $class['id'];
                $type = '#';
            }
            
            
            $files = Storage::disk('resource')->files('/views/porto/blade');
            $bar = $this->output->createProgressBar(count($files));
            $bar->start();
            $blade_dir = base_path('resources/views/porto/blade');
            foreach (glob("$blade_dir/*") as $file) {
                try {
                    $content = file_get_contents("$file");
                    $document = new DomCrawler($content);

                    $partial_htmls = $document->filter( $type . $class_name)->each(function (DomCrawler $node, $i) {
                        return $node->outerHtml();
                    });

                    foreach ($partial_htmls as $partial_html) {
                        $file_name = $this->getSnippetName($class_name);

                        $replacement = "@include('porto.partials."  . $class_name . "." . $file_name . "')";

                        Storage::disk('resource')->put('/views/porto/partials/' . $class_name . '/' . $file_name . '.blade.php', $partial_html);
                        $this->info("Snippet created : " . $file);

                        $files = Storage::disk('resource')->files('/views/porto/blade');
                        // $editbar = $this->output->createProgressBar(count($files));
                        // $editbar->start();
                        $blade_dir = base_path('resources/views/porto/blade');
                        foreach (glob("$blade_dir/*") as $file) {
                            try {
                                $file_name = basename($file, ".blade.php") . '.blade.php';

                                $content = file_get_contents("$file");
                                $document = new DomCrawler($content);
                                $item = $document->filter( $type . $class_name)->outerHtml();
                                $item_s = preg_replace('/\s+/S', " ", $item);

                                $item_par_s = preg_replace('/\s+/S', " ", $partial_html);

                                if ($item_par_s == $item_s) {
                                    $html = str_replace($item, $replacement, $content);
                                    Storage::disk('resource')->put('/views/porto/blade/' . $file_name, $html);
                                    $this->info("File Edited : " . $file);
                                }
                            } catch (\Throwable $th) {
                                // dd($th);
                                // $this->info("Error in file : " . $file);
                            }
                            // $editbar->advance();
                        }
                    }



                    // $editbar->finish();
                } catch (\Throwable $th) {
                    // dd($th);
                    // $this->info("Error in file : " . $file);
                }
                $bar->advance();
            }
            $bar->finish();
        }
    }
    public function replaceNodeWithInclode()
    {
        $partials_done = json_decode(Storage::disk('local')->get('partials_done.json'), true);
        $dir = base_path('resources/views/porto/partials');
        $partials = $this->listPartials($dir, $partials_done);

        foreach ($partials as $partial) {
            $this->info("Start partials : " . $partial['inc']);
            $path = $partial['path'];
            $partial_html = file_get_contents("$path");
            $replacement = "@include('" . $partial['inc'] . "')";
            $blade_dir = base_path('resources/views/porto/blade');
            foreach (glob("$blade_dir/*") as $file) {
                try {
                    $file_name = basename($file, ".blade.php") . '.blade.php';

                    $content = file_get_contents("$file");
                    $document = new DomCrawler($content);
                    $item = $document->filter('#footer')->outerHtml();
                    $item_s = preg_replace('/\s+/S', " ", $item);


                    $document_par = new DomCrawler($partial_html);
                    $item_par = $document_par->filter('#footer')->outerHtml();
                    $item_par_s = preg_replace('/\s+/S', " ", $item_par);

                    if ($item_par_s == $item_s) {
                        $html = str_replace($item, $replacement, $content);
                        Storage::disk('resource')->put('/views/porto/blade/' . $file_name, $html);


                        $this->info("File Edited : " . $file);
                    }
                } catch (\Throwable $th) {
                    // dd($th);
                    // $this->info("Error in file : " . $file);
                }
            }
            $partials_done[] = $partial;
        }

        $partials_done_json = json_encode($partials_done);
        Storage::disk('local')->put('partials_done.json', $partials_done_json);
    }
    public function listPartials($dir, $partials_done)
    {

        $partials = [];
        foreach (glob("$dir/*") as $file) {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (in_array($ext, ['php'])) {
                $inc = explode('views/', $file);
                $inc = str_replace('.blade.php', '', $inc[1]);
                $inc = str_replace('/', '.', $inc);
                $par_item = [
                    'path' => $file,
                    'inc' => $inc,
                ];

                if (!in_array($par_item, $partials_done)) {
                    $partials[] = $par_item;
                }
            } else {
                $partials = array_merge($partials, $this->listPartials($file, $partials_done));
            }
        }

        return $partials;
    }
    public function copyHtmlToBladeFiles()
    {
        $dir = base_path('resources/views/porto/html');
        foreach (glob("$dir/*") as $file) {
            try {
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, ['html'])) {
                    $content = file_get_contents("$file");
                    $document = new DomCrawler($content);
                    //get header
                    $header = $document->filter('#header')->outerHtml();
                    //get main
                    $main = $document->filter('[role="main"]')->outerHtml();
                    //get footer
                    $footer = $document->filter('#footer')->outerHtml();

                    $this->saveBladeFile($file, $header, $main, $footer);
                }
            } catch (\Throwable $th) {
                $this->info("Error in file : " . $file);
            }
        }
    }
    public function getSnippetName($class_name)
    {
        $file_name = $class_name;
        $i = 1;
        while (Storage::disk('resource')->exists('/views/porto/partials/' . $class_name . '/' . $file_name . '.blade.php')) {
            $file_name = (string) $class_name . '-' . $i++;
        }

        return $file_name;
    }
    public function saveBladeFile($path, $header, $main, $footer)
    {
        $file_name = basename($path, ".html") . '.blade.php';
        $file_content = "@extends('porto.app')";
        $file_content .= "
@section('header')
";
        $file_content .= $header;
        $file_content .= "
@endsection
";
        $file_content .= "
@section('main')
";
        $file_content .= $main;
        $file_content .= "
@endsection
";
        $file_content .= "
@section('footer')
";
        $file_content .= $footer;
        $file_content .= "
@endsection
";
        Storage::disk('resource')->put('/views/porto/blade/' . $file_name, $file_content);
    }
}
