<?php
session_start();
require_once "../Course/includes/nav_user.php"; 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../design/css/style_header.css">
    <link rel="stylesheet" href="../design/css/signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="body1">
<p class="text1">Регистрация и вход</p>
    <div class="div1">
        <form action="/user/signup_db.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ФИО</label>
                <input type="text" name = "name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Дата рождения</label>
                <input type="date" name = "date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Телефон</label>
                <input type="number" name = "phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" minlength="11" maxlength="11" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Логин</label>
                <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" name = "password" class="form-control" id="exampleInputPassword1" minlength="8" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Возраст</label>
                <input type="number" name = "age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <button type="submit" class="but1">Зарегистрироваться</button>
        </form>
    </div>
    <?php require_once "footer.php";?>
</body>
</html>