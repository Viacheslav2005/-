<?php
require_once "../database/Agent.php";
session_start();
$add = new Agent();

if($add -> update_insurance($_POST["id"], $_POST["name"], $_POST["price"], $_POST["amount"], $_POST["cat_id"], $_POST["descr"], $_POST["validity_period"])) {
    header("Location: /agent/agent_insurance.php"); 
    exit(); 
} else {
    header("Location: /agent/"); 
    exit(); 
}
?>