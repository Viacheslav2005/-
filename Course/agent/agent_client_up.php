<?php
require_once "../database/Admin.php";
session_start();
$add = new Admin();

if ($add -> update($_POST["id"], $_POST["FIO"], $_POST["phone"], $_POST["email"], $_POST["password"])) {
    header("Location: /agent/agent_client.php"); 
    exit();
} else {
    header("Location: /agent/"); 
    exit(); 
}