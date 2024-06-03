<?php
require_once "../database/User.php";
session_start();
$add = new User();

if ($add -> update_user($_POST["id"], $_POST["FIO"], $_POST["date"], $_POST["phone"], $_POST["email"], $_POST["pass"], $_POST["age"])) {
    header("Location: /user_acc/"); 
    exit();
} else {
    header("Location: /user_acc/"); 
    exit(); 
}