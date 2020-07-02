<?php

include('../database/db.php');
ob_start();
session_start();
if (empty($_SESSION['user_id'])) {

    header('location:sign-in.php');
}


$delete = $_GET['id'];

$del = $conn->prepare("DELETE FROM blog_tb WHERE id='$delete'");

$del->execute();

header("location:all_blog.php");
