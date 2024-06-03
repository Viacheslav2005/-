<?php
require_once "../database/Admin.php";
session_start();
$add = new Admin();

if ($add -> delete($_GET['id'])) {
    header("Location: /agent/agent_client.php"); 
    exit();
} else {
    header("Location: /agent/"); 
    exit(); 
}