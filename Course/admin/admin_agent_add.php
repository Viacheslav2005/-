<?php
require_once "../database/Admin.php";
session_start();
$add = new Admin();

if($add -> add_agent($_POST["FIO"], $_POST["phone"], $_POST["email"], $_POST["password"])) {
    header("Location: /admin/admin_agent.php"); 
    exit(); 
} else {
    header("Location: /admin/"); 
    exit(); 
}
?>