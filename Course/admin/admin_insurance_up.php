<?php 
require_once "../includes/nav_admin.php";
require_once "../database/Admin.php";

$category = new Admin();
$id = $_GET["id"];
$result = $category -> category($_GET["id"]);
?>
<head>
    <link rel="stylesheet" href="../design/css/reset.css">
    <link rel="stylesheet" href="../design/css/admin_client.css">
    <link rel="stylesheet" href="../design/css/admin_insurance.css">
</head>
<form action="admin_insurance_up_db.php" method="POST" enctype="multipart/form-data" class="form1">
    <div>
        <p>Название</p>
        <input type="hidden" name = "id" value="<?=$id?>" class="modal-body-input" name="" id="">
        <input type="text" name = "name" class="modal-body-input" name="" id="">
    </div>
    <div>
        <p>Изображение</p>
        <input type="file" name = "img" class="modal-body-input" name="" id="">
    </div>
    </div>
        <a href="admin_insurance.php" class="btn btn-primary">Назад</a>
        <button type="submit" class="btn btn-primary">Создать</button>
    </div>
</form>