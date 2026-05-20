<?php
/**
 * 🔹 Brar Eye Hospital - Image Optimizer Script
 * Just upload to your site root and visit via browser.
 * It will create optimized WebP versions of all images in /assets/images/
 */

ini_set('max_execution_time', 0);
ini_set('memory_limit', '1024M');
error_reporting(E_ALL);
echo "<pre>";

$srcDir = __DIR__ . '/assets/images';
$outDir = $srcDir . '/optimized';
$sizes = [400, 800, 1200]; // generate 3 responsive widths
$quality = 80; // webp quality (0–100)

if (!is_dir($srcDir)) {
    exit("❌ Folder not found: $srcDir\n");
}
if (!is_dir($outDir)) mkdir($outDir, 0755, true);

echo "✅ Starting Optimization...\n";
$hasImagick = class_exists('Imagick');
$hasGD = function_exists('imagecreatefromjpeg') || function_exists('imagecreatefrompng');
if (!$hasImagick && !$hasGD) exit("❌ Neither Imagick nor GD library found.\n");

$files = glob($srcDir . '/*.{jpg,jpeg,png,JPG,JPEG,PNG}', GLOB_BRACE);
echo "🖼 Found " . count($files) . " image(s).\n\n";

foreach ($files as $file) {
    $basename = pathinfo($file, PATHINFO_FILENAME);
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    list($origW, $origH) = @getimagesize($file);
    if (!$origW) continue;

    echo "⚙ Processing: " . basename($file) . "\n";
    foreach ($sizes as $w) {
        $targetW = min($w, $origW);
        $targetH = (int)($targetW * ($origH / $origW));
        $outPath = "$outDir/{$basename}-{$targetW}.webp";

        if (file_exists($outPath)) {
            echo "   ⏩ Skipped (exists): " . basename($outPath) . "\n";
            continue;
        }

        try {
            if ($hasImagick) {
                $img = new Imagick($file);
                $img->setImageFormat('webp');
                $img->resizeImage($targetW, $targetH, Imagick::FILTER_LANCZOS, 1);
                $img->setImageCompressionQuality($quality);
                $img->stripImage();
                $img->writeImage($outPath);
                $img->destroy();
                echo "   ✅ Created (Imagick): " . basename($outPath) . "\n";
            } else {
                if ($ext === 'png') $im = imagecreatefrompng($file);
                else $im = imagecreatefromjpeg($file);
                $dst = imagecreatetruecolor($targetW, $targetH);
                if ($ext === 'png') {
                    imagealphablending($dst, false);
                    imagesavealpha($dst, true);
                    $transparent = imagecolorallocatealpha($dst, 0, 0, 0, 127);
                    imagefilledrectangle($dst, 0, 0, $targetW, $targetH, $transparent);
                }
                imagecopyresampled($dst, $im, 0, 0, 0, 0, $targetW, $targetH, $origW, $origH);
                imagewebp($dst, $outPath, $quality);
                imagedestroy($im);
                imagedestroy($dst);
                echo "   ✅ Created (GD): " . basename($outPath) . "\n";
            }
        } catch (Exception $e) {
            echo "   ❌ Error: " . $e->getMessage() . "\n";
        }
    }
    echo "\n";
}

echo "🎉 Done! All optimized images saved in:\n👉 $outDir\n";
echo "Now replace your <img> src with /assets/images/optimized/... for faster speed.\n";
echo "</pre>";
?>
