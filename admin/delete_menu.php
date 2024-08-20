<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

if (!isset($_SESSION['adm_id'])) {
    $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
    header("Location: index.php");
    exit();
}


mysqli_query($db,"DELETE FROM dishes WHERE d_id = '".$_GET['menu_del']."'");
header("location:all_menu.php");  

?>
