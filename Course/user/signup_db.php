<?php
require_once "../database/User.php";
session_start();

$user = new User();

$result = $user -> signup($_POST["name"], $_POST["date"], $_POST["phone"], $_POST["email"], $_POST["password"], $_POST["age"]);

if(isset($result)) {
    $_SESSION["message"] = "Вы успешно зарегистрировались!";
    header("Location: ../signin.php");
} else {
    $_SESSION["message"] = "Ошибка регистрации!";
    header("Location: ../signup.php");
}
?>