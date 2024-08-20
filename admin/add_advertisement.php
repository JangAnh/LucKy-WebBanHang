<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

if (!isset($_SESSION['adm_id'])) {
    $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
    header("Location: index.php");
    exit();
}

$db = new mysqli('localhost', 'username', 'password', 'database');

$title = $_POST['title'];
$content = $_POST['content'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$status = 'inactive';

// Xử lý hình ảnh
$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$upload_dir = 'path/to/images/';
$upload_file = $upload_dir . basename($image);
move_uploaded_file($tmp_name, $upload_file);

// Lưu quảng cáo vào cơ sở dữ liệu
$query = "INSERT INTO advertisements (title, content, image, start_date, end_date, status) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $db->prepare($query);
$stmt->bind_param('ssssss', $title, $content, $image, $start_date, $end_date, $status);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Advertisement added successfully.";
} else {
    echo "Error adding advertisement.";
}

$stmt->close();
$db->close();
?>
