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
    <link rel="stylesheet" href="/design/css/health_driving.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="div1">
    <div class="div_descr">
        <p class="text1">Страховка вождения</p>
        <div class="div1_descr">
            <p>Практически всем автовладельцам со стажем известно, что делать в случае ДТП. Однако порядок действий усложняется, если в происшествии наносится ущерб здоровью водителя и пассажиров. Программа «» — продукт для автомобилистов, которые хотят обезопасить себя и своих близких при возникновении автомобильной аварии.</p>
            <p>«Медицинская помощь по программе страхования „“ оказывается в учреждениях, обеспечивающие оказание услуг, а также имеющих договорные отношения со Страховщиком. Перечень медицинских учреждений определяется Страховщиком в зависимости от региона»</p>
        </div>  
    </div>
    <div class="div_buy">
        <p class="text1">Стоимость страховки</p>
        <div class="div1_buy">
            <p class="div1_buy_text1">Данные для расчёта страховки</p>
            <div class="div2_buy">
                <p class="div1_buy_text2">Кол-во человек</p>
                <div>
                    <div class="form_radio_btn">
                        <input id="radio-1" type="radio" name="radio" value="1" checked>
                        <label for="radio-1">1</label>
                    </div>
                    <div class="form_radio_btn">
                        <input id="radio-2" type="radio" name="radio" value="2">
                        <label for="radio-2">2</label>
                    </div>
                    <div class="form_radio_btn">
                        <input id="radio-3" type="radio" name="radio" value="3">
                        <label for="radio-3">3</label>
                    </div>
                    <div class="form_radio_btn">
                        <input id="radio-4" type="radio" name="radio" value="4">
                        <label for="radio-4">4</label>
                    </div>
                    <div class="form_radio_btn">
                        <input id="radio-5" type="radio" name="radio" value="5">
                        <label for="radio-5">5</label>
                    </div>
                </div>
            </div>
            <div class="div3_buy">
                <p class="div1_buy_text2">Территория страхования</p>
                <input type="text">
            </div>
        </div>
        <button class="but_buy1">Рассчитать стоимость</button>
    </div>
    <p class="text2">Программа страхование вождения</p>
    <div class="div_descr2">
        <p class="text3">Оформление полиса гарантирует организацию и оплату высококвалифицированной медицинской помощи пострадавшему в случае ущерба его здоровью. Для получения выплат необходимо своевременно уведомить страховую компанию о наступлении аварийной ситуации.</p>
    </div>
    <?php require_once "footer.php";?>

</body>
</html>