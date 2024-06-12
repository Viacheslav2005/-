<?php
require_once "../database/User.php";
session_start();
$user = new User();

if(empty($user->signin($_POST["email"], $_POST["password"]))){
    $role = $_SESSION['role'];
    if($role == "user"){
        header("Location: /user_acc"); 
        exit(); 
    } elseif($role == "admin") {
        header("Location: ../admin");
        exit(); 
    } elseif($role == "agent") {
      header("Location: ../agent");
        exit(); 
    }
} else {
    header("Location: /signin.php");
    exit();
}
?>