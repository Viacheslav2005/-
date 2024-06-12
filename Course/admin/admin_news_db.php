<?php
require_once "../database/Admin.php";

$user = new Admin();

// $name = $_POST['descr'];
// $date = $_POST['date'];
// $file = $_FILES['image'];

if(!empty($_POST["descr"]) && !empty($_POST["date"]) && !empty($_FILES["img"])) {
    $add = $user -> create_news($_POST["descr"], $_POST["date"], $_FILES["img"]);
    $_SESSION["message"] = "Yes";
    header("Location: /admin/admin_news.php");
} else {
    $_SESSION["message"] = "No";
    header("Location: /admin/admin_news.php");
}

?>