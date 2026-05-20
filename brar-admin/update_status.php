<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['admin_logged_in'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    // Use MySQLi for compatibility with your imported database
    $conn = mysqli_connect("localhost", "root", "", "nagpal_hospital");
    
    if ($conn) {
        $stmt = $conn->prepare("UPDATE enquiries SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $status, $id);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
}
header('Location: index.php');
exit;