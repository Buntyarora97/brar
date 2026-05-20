<?php

$directory = __DIR__;
$allowed = ['jpg','jpeg','png'];

function convertToWebp($source, $destination, $quality = 80)
{
    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') {
        $image = imagecreatefromjpeg($source);
    } elseif ($info['mime'] == 'image/png') {
        $image = imagecreatefrompng($source);
        imagepalettetotruecolor($image);
        imagealphablending($image, true);
        imagesavealpha($image, true);
    } else {
        return false;
    }

    imagewebp($image, $destination, $quality);
    imagedestroy($image);
    return true;
}

function scanFolder($dir)
{
    global $allowed;

    $files = scandir($dir);

    foreach ($files as $file) {

        if ($file == '.' || $file == '..') continue;

        $path = $dir . '/' . $file;

        if (is_dir($path)) {
            scanFolder($path);
        } else {

            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

            if (in_array($ext, $allowed)) {

                $webp = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $path);

                if (!file_exists($webp)) {

                    if (convertToWebp($path, $webp)) {
                        echo "Converted: $path → $webp <br>";
                    }

                }
            }
        }
    }
}

scanFolder($directory);

echo "<br>Conversion Completed";
?>