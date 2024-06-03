<?php
include "../Course/includes/nav_user.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/design/css/reset.css">
    <link rel="stylesheet" href="/design/css/catalog.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="category">
        <div class="category_up">
            <div class="category_up_text">
                <div>
                    <p class="category_up_text1">Автомобили</p>
                    <p class="category_up_text2">Осаго, Каско</p>
                </div>
                <button onclick="document.location='/avto_cat.php'">Подробнее</button>
            </div>
            <div>
                <img src="/design/img/2019-Dodge-Challenger-PNG-HD-Isolated 1.png" alt="">
            </div>
        </div>
        <div class="category_down">
            <div class="property">
                <div class="property_text">
                    <div>
                        <p class="property_text1">Имущество</p>
                        <p class="property_text2">Страхование квартиры, страхование перед соседями</p>
                    </div>
                    <button onclick="document.location='/property.php'">Подробнее</button>
                </div>
                <div>
                    <img src="/design/img/House.png" alt="">
                </div>
            </div>
            <div class="health">
                <div class="health_text">
                    <div>
                        <p class="health_text1">Здоровье</p>
                        <p class="health_text2">Спортивная страховка, страховка вождения</p>
                    </div>
                    <button onclick="document.location='/health.php'">Подробнее</button>
                </div>
                <div>
                    <img src="/design/img/Emergency.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="news"> <!-- Сделать через foreach-->
        <p class="news_text">Последние новости</p>
        <div class="news_card">
            <div>
                <img src="/design/img/image 10.png" alt="" class="news_card_img">
                <p>"Страховая фирма '???' рада сообщить о новом партнерстве с крупным медицинским центром, что позволит нашим клиентам получить доступ к качественным медицинским услугам по специальным тарифам. </p>
                <p><img src="/design/img/calendar.png" alt="">1 апр 2024</p>
            </div>
            <div>
                <img src="/design/img/image 11.png" alt="" class="news_card_img">
                <p>Также, мы рады объявить об расширении списка страховых продуктов, включая защиту от непредвиденных ситуаций на дороге и в доме, а также страхование жизни и здоровья. </p>
                <p><img src="/design/img/calendar.png" alt="">1 апр 2024</p>
            </div>
            <div>
                <img src="/design/img/image 12.png" alt="" class="news_card_img">
                <p>Наша компания постоянно работает над улучшением услуг и готова помочь каждому клиенту в подборе оптимального страхового плана. С нами вы можете быть уверены в своей защите и спокойно смотреть в будущее."</p>
                <p><img src="/design/img/calendar.png" alt="">1 апр 2024</p>
            </div>
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