<?php

$root = __DIR__;
$backup = $root.'/unused_backup';

$extensions = ['jpg','jpeg','png','gif'];

$allImages = [];
$content = "";

function scanImages($dir)
{
global $extensions,$allImages;

$files = scandir($dir);

foreach($files as $file){

if($file=='.'||$file=='..') continue;

$path=$dir.'/'.$file;

if(is_dir($path)){
scanImages($path);
}else{

$ext=strtolower(pathinfo($file,PATHINFO_EXTENSION));

if(in_array($ext,$extensions)){
$allImages[]=$path;
}

}

}

}

function collectContent($dir)
{
global $content;

$files=scandir($dir);

foreach($files as $file){

if($file=='.'||$file=='..') continue;

$path=$dir.'/'.$file;

if(is_dir($path)){
collectContent($path);
}else{

$ext=pathinfo($file,PATHINFO_EXTENSION);

if($ext=='php'||$ext=='html'){
$content.=file_get_contents($path);
}

}

}

}

scanImages($root);
collectContent($root);

foreach($allImages as $img){

$name=basename($img);

if(strpos($content,$name)===false){

$dest=$backup.'/'.$name;

rename($img,$dest);

echo "Moved: ".$name."<br>";

}

}

echo "<br>Done";

?>