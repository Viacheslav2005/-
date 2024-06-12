<?php
require_once "../database/Admin.php";

$user = new Admin();

$id = $_GET["id_new"];

if(isset($id)) {
    $delete = $user -> delete_news($id);
    $_SESSION["message"] = "Новость удаленна";
    header("Location: admin_news.php");
} else {
    $_SESSION["message"] = "Ошибка";
    header("Location: admin_news.php");
}

?>