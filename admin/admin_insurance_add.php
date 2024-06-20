<?php
require_once "../database/Admin.php";
session_start();
$add = new Admin();

if($add -> add_category($_POST["name"], $_FILES["img"])) {
    header("Location: /admin/admin_insurance_polis.php"); 
    exit(); 
} else {
    header("Location: /admin/"); 
    exit(); 
}
?>