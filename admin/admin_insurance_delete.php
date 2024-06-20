<?php 
require_once "../database/Admin.php";

$admin = new Admin();

$id = $_GET["id"];

if (isset($id)) {
    $delete = $admin -> delete_category($id);
    $_SESSION["message"] = "Категория удалена";
    header("Location: /admin/admin_insurance.php");
} else {
    $_SESSION["message"] = "Ошибка";
    header("Location: /admin/admin_insurance.php");
}

?>