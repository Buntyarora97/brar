<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$positions = getActivePositions();

echo json_encode([
    'success' => true,
    'positions' => array_values($positions)
]);
?>
