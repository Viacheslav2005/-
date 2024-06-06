<?php
require_once "../database/Admin.php";
session_start();
$add = new Admin();

if($add -> update_category($_POST["id"], $_POST["name"], $_FILES["img"])) {
    header("Location: /admin/admin_insurance.php"); 
    exit(); 
} else {
    header("Location: /admin/"); 
    exit(); 
}
?>