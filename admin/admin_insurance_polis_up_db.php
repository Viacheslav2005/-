<?php
require_once "../database/Admin.php";
session_start();
$add = new Admin();

if($add -> update_insurance($_POST["id"], $_POST["name"], $_POST["price"], $_POST["amount"], $_POST["cat_id"], $_POST["descr"], $_POST["validity_period"])) {
    header("Location: /admin/admin_insurance_polis.php"); 
    exit(); 
} else {
    header("Location: /admin/"); 
    exit(); 
}
?>