<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/design/css/reset.css">
    <link rel="stylesheet" href="/design/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "../Course/includes/nav_user.php"; ?>
    <div class="div_body1">
        <div class="div_body1">
            <div class="div_body1_1">
                <p>Наша компания <span>обеспечит</span> вам надежную защиту и <span>поможет</span> оставаться спокойными в случае любых непредвиденных событий.</p>
                <img src="/design/img/image.png" alt="" class="div_body">
            </div>
            <div class="div_body1_2">
                <p>Мы предлагаем <span>широкий</span> спектр страховых продуктов, включая автомобильную, жизненную, здоровья, имущества и многие другие виды страхования.</p>
            </div>
        </div>
    </div>
    <div class="div_body2">
        <p>Часто задаваемые вопросы</p>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Зачем нужна страховка?
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Страховка нужна для защиты от финансовых потерь в случае возникновения непредвиденных ситуаций, таких как болезнь, авария, утрата имущества и другие. Она помогает обезопасить себя и своих близких от неожиданных расходов и предоставляет возможность получить компенсацию за ущерб или убытки. Также страховка обязательна в некоторых случаях, таких как обязательная медицинская страховка или страхование транспортного средства.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Как получить страховку?
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Для того чтобы оформить страховку на нашем сайте нужно всего лишь зарегистрироваться!</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Какие документы необходимы для получения страховки?
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                    Формы заявлений/запроса для получения страховки
                </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
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