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
    <link rel="stylesheet" href="/design/css/health.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="div1">
    <p class="text1">Страхование жизни и здоровья</p>
    <div class="question">
        <div class="question_div1">
            <p>Что делать, если произошел страховой случай?</p>
            <div class="question_div1_text">
                <p>Нужно обратиться в сервисную компанию и заявить о необходимости выплаты. От застрахованного лица или его представителя понадобятся следующие документы:</p>
                <ul class="question_ul1">
                    <li class="li1">удостоверение личности;</li>
                    <li class="li1">заявление о выплате, в котором должны быть указаны Ф. И. О. застрахованного, описан характер страхового случая и приведены банковские реквизиты для выплат;</li>
                    <li class="li1">бумаги, доказывающие, что страховой случай действительно произошел. Это может быть заключение врача, где указан диагноз или характер травмы, заключение об утрате трудоспособности и другие документы.</li>
                </ul>
            </div>
        </div>
        <div class="question_div2">
            <p>От чего защищает полис?</p>
            <div class="question_div2_text">
                <p>Услуга по страхованию жизни и здоровья от несчастных случаев позволяет получить выплаты в таких ситуациях, как:</p>
                <ul class="question_ul2">
                    <li class="li1">Получение травм в быту и в спорте.</li>
                    <li class="li1">Нападение животных, преступников.</li>
                    <li class="li1">Получение травмы в процессе работы с техникой или инструментами.</li>
                    <li class="li1">Отравление биологическими ядами, другими веществами.</li>
                    <li class="li1">Травмирование в результате падения предметов.</li>
                    <li class="li1">Обморожения, ожоги, поражение электрическим током.</li>
                    <li class="li1">Воздействие прочих внешних факторов.</li>
                </ul>
            </div>
            <p class="question_div2_text2">Полис не покрывает расходы на лечение острых и хронических заболеваний, осложнений, инфарктов, инсультов, опухолей и т. д. Страхователь может сделать страховку не только на себя, но и на всех близких людей.</p>
        </div>
        <div class="question_div3">
            <p>Преимущества страхования жизни и здоровья</p>
            <div class="question_div3_text">
                <ul>
                    <li class="li1">Большой выбор программ страхования от несчастного случая или болезней.</li>
                    <li class="li1">Широкий спектр рисков, от которых можно застраховаться.</li>
                    <li class="li1">Высокий уровень надежности компании.</li>
                    <li class="li1">Сотрудничество с зарекомендовавшими себя сервисными компаниями.</li>
                    <li class="li1">30 лет опыта работы на рынке страхования граждан и организаций.</li>
                    <li class="li1">Возможность застраховать жизнь и здоровье, не выходя из дома: купить электронный полис по большинству программ можно на сайте.</li>
                </ul>
            </div>
        </div>
        <div class="catalog">
            <div class="catalog_div1">
                <p>Страхование вождения</p>
                <button onclick="document.location='/health_driving.php'">Подробнее</button>
            </div>
            <div class="catalog_div1">
                <p>Страхование для спорта</p>
                <button onclick="document.location='/health_sport.php'">Подробнее</button>
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