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
    <link rel="stylesheet" href="/design/css/property_fire.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="div1">
    <p class="text1">Страхование квартиры перед соседями</p>
    <p class="text2">Полис поможет, если дома загорится проводка или прорвет трубу, — ущерб соседям возместит страховка.</p>
    <div class="card_div">
        <div class="div_programm">
            <div class="div_programm_div1">
                <p>Программа 1</p>
                <p>На месяц</p>
                <p>Страховая сумма</p>
                <span>50 000₽</span>
            </div>
            <!-- <p class="div_programm_p1">50 000₽</p> -->
            <div class="div_descr1">
                <div>
                    <p>Пожар</p>
                </div>
                <!-- <div>
                    <p>Короткое замыкание</p>
                    <img src="" alt="">
                </div>
                <div>
                    <p>Авария водонесущий сетей</p>
                    <img src="" alt="">
                </div> -->
            </div>
            <button>Купить</button>
        </div>
        <div class="div_programm">
            <div class="div_programm_div1">
                <p>Программа 2</p>
                <p>На 6 месяцев</p>
                <p>Страховая сумма</p>
                <span>50 000₽</span>
            </div>
            <!-- <p class="div_programm_p1">50 000₽</p> -->
            <div class="div_descr1">
                <div>
                    <p>Пожар</p>
                    <img src="" alt="">
                </div>
                <div>
                    <p>Короткое замыкание</p>
                    <img src="" alt="">
                </div>
                <!-- <div>
                    <p>Авария водонесущий сетей</p>
                    <img src="" alt="">
                </div> -->
            </div>
            <button>Купить</button>
        </div>
        <div class="div_programm">
            <div class="div_programm_div1">
                <p>Программа 3</p>
                <p>На год</p>
                <p>Страховая сумма</p>
                <span>50 000₽</span>
            </div>
            <!-- <p class="div_programm_p1">50 000₽</p> -->
            <div class="div_descr1">
                <div>
                    <p>Пожар</p>
                    <img src="" alt="">
                </div>
                <div>
                    <p>Короткое замыкание</p>
                    <img src="" alt="">
                </div>
                <div>
                    <p>Авария водонесущий сетей</p>
                    <img src="" alt="">
                </div>
            </div>
            <button>Купить</button>
        </div>
    </div>

    <div class="risks">
        <p class="risks_p">Преимущества полиса “Ответственность перед соседями”</p>
        <div class="risks_descr">
            <div class="risks_descr_div">
                <ul>
                    <li>Страхование без франшизы</li>
                    <li>Возможность выбора страховых сумм из списка</li>
                    <li>Быстрое оформление полиса</li>
                    <li>Отсутствие письменного заявления</li>
                    <li>Оптимальная программа страхования</li>
                    <li>Выгодные условия страхования.</li>
                </ul>
            </div>
            <div class="risks_img">
                <img src="/design/img/image 8.png" alt="">
            </div>
        </div>
    </div>
    <?php require_once "footer.php";?>
