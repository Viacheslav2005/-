<?php
session_start();
require_once "database/Query.php";

$cover = new Query();

$coverage = $cover -> coverage($_GET["id"]);
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
        <!-- <div class="catalog_div1">
            <p><?=$item[1]?></p>
            <button onclick="document.location='/property_apartment.php'">Подробнее</button>
        </div> -->


    <div class="card_div">
            <?php foreach($coverage as $item) {?>
                <form action="/user/add_order.php" method="POST">
                    <div class="div_programms">
                        <div class="div_programms_div1">
                            <input type="hidden" name="id" value = "<?=$item[0]?>">
                            <p><input readonly type="text" name="name" id="" value="<?=$item[1]?>"></p>
                            <div class="valid_period">
                                <span><input type="text" readonly name="price" id="" value="<?=$item[2]?>">₽</span>/ <input readonly type="text" name="" id="" value = "<?=$item[6]?>"> месяцев
                            </div>
                            <p>Страховая сумма</p>
                            <span><?=$item[3]?>₽</span>
                        </div>
                        <div class="div_descrs3">
                            <!-- <p><input readonly type="text" name="descr" id="" value = "<?=$item[5]?>"></p> -->
                            <textarea name="descr" id="" value = "<?=$item[5]?>" rows="5" cols="28"><?=$item[5]?></textarea>
                        </div>
                        <?php if(isset($_SESSION['auth'])) {?>
                            <button type = "submit">Купить</button>
                        <?php } else { ?>
                        <?php } ?>
                    </div>
                </form>
            <?php } ?>
    </div>

<?php require_once "footer.php";?>

</body>
</html>