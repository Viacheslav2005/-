<?php
require_once "../database/User.php";
session_start();
$user = new User();

$add = $user -> add_order($_POST["id"], $_POST["price"]);
if($add) {
    header("Location: ../user_acc/Personal_account_Service.php");
    exit();
} else {
    header("Location: ../user_acc/Personal_account_Service.php");
    exit();
}
?>