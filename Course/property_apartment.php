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
    <link rel="stylesheet" href="/design/css/property_apartament.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="div1">
    <p class="text1">Страхование квартиры</p>
    <p class="text2">Защита имущества и отделки в Вашей квартире от пожара, затопления и других рисков.</p>
    <div class="card_div">
        <div class="div_programm">
            <div class="div_programm_div1">
                <p>Программа 1</p>
                <p><span>3 400₽</span>/год</p>
                <p>Страховая сумма</p>
                <span>50 000₽</span>
            </div>
            <div class="div_descr1">
                <div class="div_descr2">
                    <p>Отделка</p>
                    <p>400 000₽</p>
                </div>
                <div class="div_descr2">
                    <p>Домашнее имущество</p>
                    <p>400 000₽</p>
                </div>
                <div class="div_descr2">
                    <p>Гражданская ответственность</p>
                    <p>400 000₽</p>
                </div>
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
            <div class="div_descr1">
                <div class="div_descr2">
                    <p>Отделка</p>
                    <p>400 000₽</p>
                </div>
                <div class="div_descr2">
                    <p>Домашнее имущество</p>
                    <p>400 000₽</p>
                </div>
                <div class="div_descr2">
                    <p>Гражданская ответственность</p>
                    <p>400 000₽</p>
                </div>
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
            <div class="div_descr1">
                <div class="div_descr2">
                    <p>Отделка</p>
                    <p>400 000₽</p>
                </div>
                <div class="div_descr2">
                    <p>Домашнее имущество</p>
                    <p>400 000₽</p>
                </div>
                <div class="div_descr2">
                    <p>Гражданская ответственность</p>
                    <p>400 000₽</p>
                </div>
            </div>
            <button>Купить</button>
        </div>
    </div>

    <div class="risks">
        <p class="risks_p">От каких рисков действует защита</p>
        <div class="risks_descr">
            <div class="risks_descr_div">
                <p>Добровольное страхование защищает от распространенных рисков, среди которых:</p>
                <ul>
                    <li>Пожар, взрыв;</li>
                    <li>Залив (затопление) квартиры;</li>
                    <li>Стихийные бедствия;</li>
                    <li>Противоправные действия третьих лиц;</li>
                    <li>Причинение вреда здоровью, жизни, имуществу третьих лиц;</li>
                    <li>Падение летательных аппаратов и их частей.</li>
                </ul>
            </div>
            <div class="risks_img">
                <img src="/design/img/snapedit_1713719073030 1.png" alt="">
            </div>
        </div>
    </div>
    <?php require_once "footer.php";?>