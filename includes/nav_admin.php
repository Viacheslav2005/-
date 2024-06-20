<?php
session_start();
require_once "../database/Query.php";
$user = new Query();
$cat = $user -> categories();


if (isset($_SESSION["message"])) {
    $mess = $_SESSION["message"];
    echo "<script>alert('$mess')</script>";
    unset($_SESSION["message"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../design/css/style_header.css">
    <link rel="stylesheet" href="../design/css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <img src="../design/img/Логотип.jpg" alt="">
        <button class="head_but" onclick="document.location='../admin/admin_client.php'">Клиенты</button>
        <button class="head_but" onclick="document.location='../admin/admin_agent.php'">Агенты</button>
        <button class="head_but" onclick="document.location='../admin/admin_insurance.php'">Виды страхования</button>
        <button class="head_but" onclick="document.location='../admin/admin_news.php'">Создать новость</button>
        <button type="button" class="head_but" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Создание полиса</button>
        <button class="head_but" onclick="document.location='../admin/admin_insurance_polis.php'">Обновление полиса</button>
        <div class="div_sign">
            <?php 
            if(isset($_SESSION['auth'])) { ?>
                <!-- <a href="../admin/index.php"><img src="../design/img/image 2.png" alt=""></a> -->
                <a href="../signout.php"><img src="../design/img/Exit.png" alt=""></a>
            <?php } else { ?>
                <a href="../signin.php"><img src="../design/img/image 2.png" alt=""></a>
            <?php } ?>
        </div>
    </div>  
    
    
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Создание полиса</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action = "../admin/admin_add_insurance.php" method="POST">
        <div class="modal-body">
            <div>
                <p>Выбрать страхование</p>
                <select name="cat_id" id="" class="modal-body-input">
                    <?php foreach($cat as $item) { ?>
                        <option value="<?=$item[0]?>"><?=$item[1]?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <p>Название</p>
                <input type="text" name = "ins_name" class="modal-body-input" name="" id="">
            </div>
            <div>
                <p>Стоимость</p>
                <input type="text" name = "ins_price" class="modal-body-input" name="" id="">
            </div>
            <div>
                <p>Описание</p>
                <input type="text" name = "descr" class="modal-body-input" name="" id="">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Создать</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>