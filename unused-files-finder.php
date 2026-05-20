<?php

$root = __DIR__;

$extensions = ['jpg','jpeg','png','webp','gif','mp4','webm'];

$allFiles = [];
$usedContent = "";

function scanAllFiles($dir)
{
    global $extensions,$allFiles;

    $files = scandir($dir);

    foreach ($files as $file) {

        if ($file == '.' || $file == '..') continue;

        $path = $dir.'/'.$file;

        if (is_dir($path)) {
            scanAllFiles($path);
        } else {

            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

            if (in_array($ext,$extensions)) {

                $allFiles[] = $path;
            }

        }
    }
}

function collectWebsiteContent($dir)
{
    global $usedContent;

    $files = scandir($dir);

    foreach ($files as $file) {

        if ($file == '.' || $file == '..') continue;

        $path = $dir.'/'.$file;

        if (is_dir($path)) {

            collectWebsiteContent($path);

        } else {

            $ext = pathinfo($file, PATHINFO_EXTENSION);

            if ($ext == 'php' || $ext == 'html') {

                $usedContent .= file_get_contents($path);

            }

        }

    }
}

scanAllFiles($root);
collectWebsiteContent($root);

echo "<h2>Unused Files</h2>";

foreach ($allFiles as $file) {

    $name = basename($file);

    if (strpos($usedContent,$name) === false) {

        echo $file."<br>";

    }

}

?>