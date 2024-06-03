<?php
session_start();
require_once "../includes/nav_user.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../design/css/Personal_account_Service.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="body1">
    <div class="div1">
        <div class="div2">
            <a href="/user_acc/" class="div2_a">Личный кабинет</a>
            <a href="Personal_account_Services.php" class="div2_a">Услуги</a>
        </div>
            <form action="" method="POST">
                <!-- <p>Личные данные</p>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ФИО</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Дата рождения</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Телефон</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" minlength="11" maxlength="11">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Логин</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Возраст</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" minlength="18" maxlength="100">
                </div> -->
                <div class="Service_descr">
                    <p>Электронный страховой полис ОСАГО</p>
                    <div class="Service_descr_div1">
                        <input type="text" placeholder="Номер полиса">
                        <a href="">Скачать файл</a>
                    </div>
                    <div class="Service_descr_div1">
                        <a href="catalog.php">+ Оформить новый</a>
                    </div>
                </div>
                
                <div class="div_buttons">
                    <button type="submit" class="but1">Отменить</button>
                    <button type="submit" class="but2">Сохранить</button>
                </div>
            </form>
    </div>
<?php require_once "../footer.php";?>
</body>
</html>