<?php
require_once "../database/Admin.php";
session_start();
$add = new Admin();
$length = 8;

$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%^&*()';
if ($length > strlen($characters)) {
    throw new InvalidArgumentException('Length of password cannot exceed the number of available characters.');
}
$password = '';
for ($i = 0; $i < $length; $i++) {
    $password.= $characters[rand(0, strlen($characters) - 1)];
}

if($add -> add_agent($_POST["FIO"], $_POST["phone"], $_POST["email"], $password)) {
    header("Location: /admin/admin_agent.php"); 
    exit(); 
} else {
    header("Location: /admin/");
    exit(); 
}
?>