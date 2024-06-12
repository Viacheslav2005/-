<?php
session_start();

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
        <div class="div_sign">
            <?php 
            if(isset($_SESSION['auth'])) { ?>
                <a href="../admin/admin_agent.php"><img src="../design/img/image 2.png" alt=""></a>
                <a href="../signout.php"><img src="../design/img/Exit.png" alt=""></a>
            <?php } else { ?>
                <a href="../signin.php"><img src="../design/img/image 2.png" alt=""></a>
            <?php } ?>
        </div>
    </div>    
</body>
</html>