<?php
require_once "../database/Admin.php";
session_start();
$add = new Admin();

if ($add -> delete($_GET['id'])) {
    header("Location: /admin/admin_client.php"); 
    exit();
} else {
    header("Location: /admin/"); 
    exit(); 
}