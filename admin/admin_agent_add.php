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
    $email = $_POST["email"];
    $to = 'Пароль агента для входа по логину ' . $email . '';
    $message = 'Пароль для входа - ' . $password . '';
    mail('vimangulov2005@mail.ru', $to, $message);
    header("Location: /admin/admin_agent.php"); 
    exit(); 
} else {
    header("Location: /admin/");
    exit(); 
}
?>