<?php

$directory = __DIR__;

function scanFiles($dir)
{
    $files = scandir($dir);

    foreach ($files as $file) {

        if ($file == '.' || $file == '..') continue;

        $path = $dir . '/' . $file;

        if (is_dir($path)) {

            scanFiles($path);

        } else {

            $ext = pathinfo($path, PATHINFO_EXTENSION);

            if ($ext == 'php' || $ext == 'html' || $ext == 'htm') {

                $content = file_get_contents($path);

                $newContent = preg_replace('/\.(jpg|jpeg|png)/i', '.webp', $content);

                if ($content !== $newContent) {

                    file_put_contents($path, $newContent);

                    echo "Updated: $path <br>";
                }
            }
        }
    }
}

scanFiles($directory);

echo "<br>All Image Links Converted to WEBP";

?>