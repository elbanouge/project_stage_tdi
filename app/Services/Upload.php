<?php

namespace App\Services;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Storage;

class Upload
{

    /**
     * Upload image
     *
     * @return boolean
     */
    public function image($input, $type)
    {
        switch ($type) {
            case 'images':
                $now = Carbon::now();
                $date = $now->year . '/' . $now->month . '/';
                break;
            case 'posts':
                $now = Carbon::now();
                $date = $now->year . '/' . $now->month . '/';
                break;
            case 'wysiwyg':
                $now = Carbon::now();
                $date = $now->year . '/' . $now->month . '/';
            case 'pubs':
                $now = Carbon::now();
                $date = $now->year . '/' . $now->month . '/';
                break;
            case 'slides':
                $now = Carbon::now();
                $date = $now->year . '/' . $now->month . '/';
                break;
            default:
                $date = '';
                break;
        }

        $sizes = config('asarach.upload_folders')[$type];

        $this->createFoldersIfNotExists($sizes, $date);

        $name = $this->preparedName(Storage::disk('uploads')->path(reset($sizes)['folder']), $date, $input);

        foreach ($sizes as $size) {
            $this->saveImage($input['file'], $date . $name, $size['size'], Storage::disk('uploads')->path($size['folder']));
        }

        return $date . $name;
    }
    public function importPostImage($url)
    {
        $now = Carbon::now();
        $date = $now->year . '/' . $now->month . '/' . $now->day . '/';


        $sizes = config('asarach.upload_folders')['posts'];
        $this->createFoldersIfNotExists($sizes, $date);

        $input = ['filename' => $url];

        $name = $this->preparedName(Storage::disk('uploads')->path(reset($sizes)['folder']), $date, $input);
        foreach ($sizes as $size) {
            $this->saveImage($input['filename'], $name, $size['size'], Storage::disk('uploads')->path($size['folder']));
        }

        return $name;
    }
    public function video($input, $type)
    {
        $this->createFoldersIfNotExists([['folder' => '/videos/']]);
        $name = $this->preparedName('/uploads/videos/', '', $input);
        $input['file']->storeAs('/uploads/videos/', $name, ['disk' => 'public_html']);
        return $name;
    }

    public function avatar($input)
    {
        $now = Carbon::now();
        $date = $now->year . '/' . $now->month . '/';

        $sizes = config('drtopic.avatars_image_sizes');
        $this->createFoldersIfNotExists($sizes, $date);
        $name = $this->preparedName(reset($sizes)['folder'], $date, $input);
        foreach ($sizes as $size) {
            $this->saveAvatar($input['file'], $name, $size['size'], Storage::disk('uploads')->path($size['folder']));
        }

        return $name;
    }

    public function file($input, $type)
    {
        $now = Carbon::now();
        $date = $now->year . '/' . $now->month . '/';
        $folder = $type . '/';

        $this->createFoldersIfNotExists([['folder' => $folder]], $date);

        $name = $this->preparedName(Storage::disk('uploads')->path($type . '/'), $date, $input);

        try {
            $input['file']->storeAs($folder . $date, $name, 'uploads');
        } catch (Exception $e) {
            $this->errors = 'There was a problem uploading your file.';
            return false;
        }

        return $date . $name;
    }

    public function analyticsFile($input)
    {
        $now = Carbon::now();
        $date = $now->year . '/' . $now->month . '/';
        $folder =  storage_path() . '/analytics_files/' . $date;
        $this->createFoldersIfNotExists([['folder' => $folder]]);
        $name = $this->preparedName($folder, $date, $input);

        try {
            $input['file']->move($folder, $name);
        } catch (Exception $e) {
            $this->errors = 'There was a problem uploading your file.';
            return false;
        }

        return  $name;
    }

    public function preparedName($folder, $date, $input)
    {
        if (isset($input['filename'])) {
            $extension = '.' . pathinfo($input['filename'], PATHINFO_EXTENSION);
            $file_name_slug = Str::of(pathinfo($input['filename'], PATHINFO_FILENAME))->slug('-');
        } else {
            $file_name = $input['file']->getClientOriginalName();
            $file_name_slug = Str::of(pathinfo($file_name, PATHINFO_FILENAME))->slug('-');
            $extension = '.' . $input['file']->getClientOriginalExtension();
        }
        $original_name = $file_name_slug;
        $i = 1;
        while (file_exists(Storage::disk('uploads')->exists($folder . $date . $file_name_slug . $extension))) {
            $file_name_slug = (string) $original_name . '-' . $i;
            $i++;
        }

        $name = $file_name_slug . $extension;

        return $name;
    }

    public function createFoldersIfNotExists($sizes, $date = '')
    {
        foreach ($sizes as $size) {
            if (!Storage::disk('uploads')->exists($size['folder'] . $date)) {
                File::makeDirectory(Storage::disk('uploads')->path($size['folder'] . $date), 755, true);
            }
        }
    }

    public function saveImage($inputImage, $name, $size, $folder)
    {
        $image = Image::make($inputImage);

        if ($size[0] > 300) {
            if ($image->height() > $size[1]) {
                $image->heighten($size[1]);
            }
            if ($image->width() > $size[0]) {
                $image->fit($size[0], $size[1]);
            }
        } else {
            $image->fit($size[0], $size[1]);
        }

        try {
            $image->save($folder . $name, 100);
        } catch (Exception $e) {
            $this->errors = 'There was a problem uploading your image.';
            return false;
        }
    }
    public function saveAvatar($inputImage, $name, $size, $folder)
    {
        $image = Image::make($inputImage);
        $image->fit($size[0], $size[1]);
        try {
            $image->save($folder . $name, 100);
        } catch (Exception $e) {
            $this->errors = 'There was a problem uploading your image.';
            return false;
        }
    }

    public function errors()
    {
        return $this->errors;
    }
}
