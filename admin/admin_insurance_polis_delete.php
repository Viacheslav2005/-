<?php
session_start();
require_once "../includes/nav_admin.php";
require_once "../database/Query.php";

$user = new Query();

$result = $user -> delete_insurance($_GET["id"]);

$_SESSION["message"] = "Полис удален!";

header("Location: admin_insurance_polis.php");
?>