<?php
require_once "../database/Admin.php";
session_start();
$add = new Admin();

if($add -> add_category($_POST["name"], $_POST["img"])) {
    header("Location: /admin/admin_insurance.php"); 
    exit(); 
} else {
    header("Location: /admin/"); 
    exit(); 
}
?>