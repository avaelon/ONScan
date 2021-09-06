<?php


namespace App\Services\ImageProcessing;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ImageUploader
{

    // if (!function_exists('storeFile')) {
    //     function storeFile($file)
    //     {
    //         $fileName = Str::random(8) . "." . $file->extension();
    //         Storage::putFileAs('downloads', $file, $fileName);
    //         return $fileName;
    //     }
    // }
   
        function storeImage($file)
        {
            $imageName = Str::random(8) . "." . $file->extension();
            Storage::putFileAs('public', $file, $imageName);
            return $imageName;
        }
    

        function storeMultipleImages($files, $record, $photoType)
        {
            foreach ($files as $key => $file) {
                $imageName = Str::random(8) . "." . $file->extension();
                Storage::putFileAs('public', $file, $imageName);
                $record->photos()->create([
                    'name' => $imageName,
                    'photo_type' => $photoType,
                ]);
            }
            return;
    }

}