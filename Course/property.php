<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/design/css/reset.css">
    <link rel="stylesheet" href="/design/css/property.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="div1">
<?php include "../Course/includes/nav_user.php"; ?>    
<p class="text1">Страхование имущества и жилья</p>
<p class="text2">Оформите страхование жилья удобным для вас способом</p>
<div class="div_descr1">
    <div class="div_descr2">
        <img src="design/img/monitor.png" alt="">
        <p><span>Онлайн</span></p>
        <p>Выберите подходящую для вас программу</p>
        <p><span>«Страхование квартиры»</span> или <span>«Ответственность перед соседями»</span> </p>
        <p>оплатите онлайн и полис будет доставлен вам на e-mail.</p>
    </div>
    <div class="div_descr2">
        <img src="design/img/phone.png" alt="">
        <p><span>По телефону</span></p>
        <p>Для получения индивидуального расчета обратитесь в наши офисы или позвоните нам по телефону</p>
        <p><span>✲0999 <br> 8 800 333 0 999</span></p>
        <p>(звонок по России бесплатный).</p>
    </div>
</div>
<div class="div_descr3">
    <p>Страховка недвижимости обеспечит финансовую поддержку в случае затопления, пожара, взлома, взрыва газа и других непредвиденных обстоятельств.</p>
</div>
<div class="catalog">
    <div class="catalog_div1">
        <p>Страхование квартиры</p>
        <button onclick="document.location='/property_apartment.php'">Подробнее</button>
    </div>
    <div class="catalog_div1">
        <p>Ответственность перед соседями</p>
        <button onclick="document.location='/property_fire.php'">Подробнее</button>
    </div>
</div>
<!-- <footer class="footer1">
    <div class="footer_div1">
        <a href="">Главная</a>
        <a href="">О нас</a>
        <a href="">Офисы</a>
        <a href="">Новости</a>
        <a href="">Спецпредложения</a>
    </div>
    <div class="footer_div2">
        <p>450000, г. Уфа, <br> ул. Кирова, д. 65/1</p>
        <p>График работы главного<br> офиса 450000, г. Уфа, <br>
            ул. Кирова, д. 65/1 <br>
            Пн. - Чт. с 9:00 до 18:00 <br>
            Пт.  с 9:00 до 16:45  <br>
            Сб-Вс выходной
        </p>
    </div>
    <div class="footer_div3">
        <p class="footer_div3_text2">Адрес для почтовых отправлений: <br>450000, г. Уфа</p>
        <p class="footer_div3_text">тел.: +7 (999) 888 77 66</p>
        <p class="footer_div3_text2">Email для связи с нами yandex@mail.ru</p>
        <div class="footer_div3_icon">
            <a href=""><img src="/design/img/vk.png" alt=""></a>
            <a href=""><img src="/design/img/telegramm.png" alt=""></a>
        </div>
    </div>    
</footer> -->
<?php require_once "footer.php";?>

</body>
</html>