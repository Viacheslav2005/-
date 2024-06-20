<?php
require_once "../database/User.php";
session_start();

$user = new User();
$name = isset($_POST["name"]) ? $_POST["name"] : false;
$phone = isset($_POST["phone"]) ? $_POST["phone"] : false;
$date = isset($_POST["date"]) ? $_POST["date"] : false;
$email = isset($_POST["email"]) ? $_POST["email"] : false;
$password = isset($_POST["password"]) ? $_POST["password"] : false;
$age = isset($_POST["age"]) ? $_POST["age"] : false;


if($name and $phone and $email and $password and $age) {
    $result = $user -> signup($name, $date, $phone, $email, $password, $age);
    $_SESSION["message"] = "Вы успешно зарегистрировались!";
    header("Location: ../signin.php");
} else {
    $_SESSION["message"] = "Ошибка регистрации!";
    header("Location: ../signup.php");
}
?>