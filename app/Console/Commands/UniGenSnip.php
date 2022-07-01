<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use DB;
use Cache;
use Symfony\Component\DomCrawler\Crawler as DomCrawler;

class UniGenSnip extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'unigen:snip';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generat full app';
    protected $tags = ['a', 'p', 'strong', 'section'];

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
        $this->createSnippets();
    }

    public function createSnippets()
    {

        $blade_dir = base_path('resources/views/porto/partials');

        foreach (glob("$blade_dir/*") as $dir) {
            foreach (glob("$dir/*") as $key => $file) {
                $content = file_get_contents("$file");
                $crawler = new DomCrawler($content);
                $nodes = $crawler->filter('*');
                foreach ($nodes as $node) {
                    if (in_array($node->tagName , $this->tags)) {
                        dd($node->getAttribute('class'));
                    }
                }
                dd('asa');
            }
        }


        // $snippets_map = $this->mapSnippets();
        // $bar = $this->output->createProgressBar(count($snippets_map));
        // $bar->start();
        // foreach ($snippets_map as $snippet) {
        //     $main_sfile = base_path('resources/views/porto/partials/' . $snippet['file'] . '.php');
        //     $main_sfile_content = file_get_contents("$main_sfile");
        //     if (strpos($main_sfile_content, '{{$post') === false) {
        //         $main_document = new DomCrawler($main_sfile_content);
        //         foreach ($snippet['data'] as $key => $data) {
        //             $data = explode('|', $data);
        //             if (isset($data[1])) {
        //                 switch ($data[1]) {
        //                     case 'href':
        //                         $item = $main_document->filter($data[0])->attr('href');
        //                         break;
        //                     default:
        //                         $item = $main_document->filter($data[0])->attr($data[1]);
        //                         break;
        //                 }
        //             } else {
        //                 $item = $main_document->filter($data[0])->text();
        //             }

        //             $main_sfile_content = str_replace($item, '{{$post->' . $key . '}}',  $main_sfile_content);
        //         }


        //         $blade_dir = base_path('resources/views/porto/partials/' . $snippet['folder']);

        //         foreach (glob("$blade_dir/*") as $key => $file) {
        //             $content = file_get_contents("$file");
        //             if (strpos($content, '{{$post') === false) {
        //                 try {
        //                     $b = str_replace('C:\Wnmp\html\unigenv\resources/views/porto/partials/', '', $file);
        //                     $b  = str_replace('.blade.php', '', $b);
        //                     $b  = str_replace('/', '.', $b);
        //                     $file_include = "@include('porto.partials."  . $b . "')";
        //                     $file_name = str_replace('C:\Wnmp\html\unigenv\resources', '', $file);
        //                     $snippets_key = $b;
        //                     $result = [];

        //                     $document = new DomCrawler($content);
        //                     foreach ($snippet['data'] as $key => $data) {
        //                         $data = explode('|', $data);
        //                         if (isset($data[1])) {
        //                             switch ($data[1]) {
        //                                 case 'href':
        //                                     $item = $document->filter($data[0])->attr('href');
        //                                     break;
        //                                 default:
        //                                     $item = $document->filter($data[0])->attr($data[1]);
        //                                     break;
        //                             }
        //                         } else {
        //                             $item = $document->filter($data[0])->text();
        //                         }

        //                         $content = str_replace($item, '{{$post->' . $key . '}}',  $content);

        //                         $result[$key] = $item;
        //                     }

        //                     $main_sfile_content_s = preg_replace('/\s+/S', " ", $main_sfile_content);
        //                     $content_s = preg_replace('/\s+/S', " ", $content);

        //                     if ($main_sfile_content_s == $content_s) {
        //                         DB::table('snippets_post')->insert([
        //                             'key' => $snippets_key,
        //                             'data' => json_encode($result),
        //                         ]);
        //                         $main_file_name = str_replace('C:\Wnmp\html\unigenv\resources', '', $main_sfile);
        //                         // dd($main_file_name);
        //                         if ($file_name == $main_file_name ) {
        //                             Storage::disk('resource')->put($file_name, $content);
        //                         } else {
        //                             Storage::disk('resource')->delete($file_name);
        //                         }
        //                         $this->replaceIncludes($snippets_key, $snippet['file']);
        //                     }
                            
        //                 } catch (\Throwable $th) {
        //                     // throw $th;
        //                 }
        //             }
        //         }
        //     }
        //     $bar->advance();
        // }
        // $bar->finish();
    }

}
