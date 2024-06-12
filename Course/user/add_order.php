<?php
require_once "../database/User.php";
session_start();
$user = new User();

$add = $user -> add_order($_POST["id"]);
if($add) {
    header("Location: ../user_acc/Personal_account_Services.php");
    exit();
} else {
    header("Location: ../user_acc/Personal_account_Services.php");
    exit();
}
?>