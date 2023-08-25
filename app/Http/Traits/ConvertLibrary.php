<?php

namespace App\Http\Traits;

use File;

trait ConvertLibrary
{

    public function fileToWebp($old_file, $old_file_name, $old_file_ext, $path, $list_ext = ['jpg', 'jpeg', 'png'])
    {
        $destination_path = public_path("storage/img/$path");

        $output = false;
        $file_name_output = false;

        if (in_array($old_file_ext, $list_ext)) {
            /* MUST BIG MEMORY */
            // if($old_file_ext == 'png') {
            //     $source_image = imagecreatefrompng($old_file);
            //     $true_color_image = imagecreatetruecolor(imagesx($source_image), imagesy($source_image));
            //     imagecopy($true_color_image, $source_image, 0, 0, 0, 0, imagesx($source_image), imagesy($source_image));
            //     imagedestroy($source_image); // Hapus objek GdImage yang tidak diperlukan lagi
            //     $new_file = $destination_path . "/new_file.png";
            //     imagepng($true_color_image, $new_file); // Simpan gambar baru sebagai file PNG
            //     imagedestroy($true_color_image); // Hapus objek GdImage yang tidak diperlukan lagi

            //     // Gunakan gambar baru sebagai argumen untuk fungsi imagecreatefrompng()
            //     $image = imagecreatefrompng($new_file);
            // } else {
            //     $image = imagecreatefromjpeg($old_file);
            // }

            /* ERROR PATTERN */
            // $image = $old_file_ext == 'png'
            //     ? imagecreatefrompng($old_file)
            //     : imagecreatefromjpeg($old_file);

            if ($old_file_ext == 'png') {
                $image = imagecreatefrompng($old_file);
                imagepalettetotruecolor($image);
                imagealphablending($image, true);
                imagesavealpha($image, true);
            } else {
                $image = imagecreatefromjpeg($old_file);
            }

            $file_name_output = $old_file_name . '.webp';
            $output = $destination_path . '/' . $file_name_output;
            imagewebp($image, $output);
            // if($old_file_ext == 'png') unlink($new_file);
        }

        $file = $output ? File::get($output) : null;

        $result = (object) [
            'file' => $file,
            'file_name' => $file_name_output,
            'file_path' => $output
        ];

        return $result;
    }

    public function getMicroseconds($format = 'YmdHis', $length = 6) {
        $microtime = microtime(true);
        $seconds = floor($microtime);
        $microseconds = ($microtime - $seconds) * 1000000;
        $date = date($format, $seconds) . '.' . sprintf("%0" . $length . "d", $microseconds);
        return $date;
    }
}
