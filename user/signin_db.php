<?php
require_once "../database/User.php";
session_start();
$user = new User();

if(empty($user->signin($_POST["email"], $_POST["password"]))){
    $role = isset($_SESSION['role']) ? $_SESSION['role'] : false;
    if($role == "user"){
        $_SESSION['message'] = "Вы успешно вошли как пользователь!";
        header("Location: /user_acc"); 
        exit(); 
    } elseif($role == "admin") {
        $_SESSION['message'] = "Вы успешно вошли администратор!";
        header("Location: ../admin/admin_agent.php");
        exit(); 
    } elseif($role == "agent") {
        $_SESSION['message'] = "Вы успешно вошли агент!";
        header("Location: ../agent/agent_order.php");
        exit(); 
    } elseif($role == false) {
        $_SESSION['message'] = "Такой пользователь не найден!";
        header("Location: ../signin.php");
    }
} else {
    header("Location: /signin.php");
    exit();
}
?>