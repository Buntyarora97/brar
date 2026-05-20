<?php
header("Content-Type: application/xml; charset=utf-8");

$domain = "https://brareyehospital.com";

// sabhi .php aur .html files public_html me uthao
$files = glob($_SERVER['DOCUMENT_ROOT']."/*.php");
$files = array_merge($files, glob($_SERVER['DOCUMENT_ROOT']."/*.html"));

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach($files as $file): ?>
  <url>
    <loc><?php echo $domain . "/" . basename($file); ?></loc>
    <lastmod><?php echo date("Y-m-d", filemtime($file)); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
  </url>
<?php endforeach; ?>
</urlset>
