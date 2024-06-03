<?php
require_once "../database/Admin.php";
session_start();
$add = new Admin();

if ($add -> delete($_GET['id'])) {
    header("Location: /admin/admin_agent.php"); 
    exit();
} else {
    header("Location: /admin/"); 
    exit(); 
}