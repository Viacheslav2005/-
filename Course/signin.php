<?php
session_start();
require_once "../Course/includes/nav_user.php"; 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../design/css/style_header.css">
    <link rel="stylesheet" href="../design/css/signin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="body1">
<p class="text1">Вход в личный кабинет</p>
    <div class="div1">
        <form action="/user/signin_db.php" method="POST">
            <!-- <div class="form">
                <div class="mb-3">
                    <label for="" class="form-label">Логин</label>
                    <input type="email" name = "email">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Пароль</label>
                    <input type="password" name = "password">
                </div>
                <p>Новый пользователь? <a href="">Зарегистрироваться</a></p>
            </div> -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Логин</label>
                <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" name = "password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <p>Новый пользователь? <a href="signup.php">Зарегистрироваться</a></p>
            <button type="submit" class="but1">Войти</button>
        </form>
        
    </div>
    <?php require_once "footer.php";?>
</body>
</html>