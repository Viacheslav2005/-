<?php
session_start();
require_once "database/Query.php";

$cover = new Query();

$cat_id = isset($_GET["id"]) ? $_GET["id"] : false;

$coverage = $cover -> coverage($cat_id);

$check = $cover -> coverage_nou($cat_id);

$role = isset($_SESSION["role"]) ? $_SESSION["role"] : false;

$page =  isset($_GET['page']) ? $_GET['page'] : 1;

$paginate_count = 3;

$paginate = $cover -> all_cat_ins_cat($page, $paginate_count, $cat_id);

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
        <?php foreach(mysqli_fetch_all($paginate) as $item) {?>
            <form action="buy_polis.php" method="POST">
                <div class="div_programms">
                    <div class="div_programms_div1">
                        <input type="hidden" name="id" value = "<?=$item[0]?>">
                        <p><?=$item[1]?></p>
                        <!-- <p><input readonly type="text" name="name" id="" value="<?=$item[1]?>"></p> -->
                        <div class="valid_period">
                            <p><span><?=$item[2]?>₽</span>/1 месяц</p>
                        </div>
                        <input type="number" name = "validity_period" placeholder="Введите срок действия полиса" style="text-align: center;"  min="1">
                    </div>
                    <div class="div_descrs3">
                        <p><textarea name="" id="" cols="30" rows="5"><?=$item[4]?></textarea></p>
                    </div>
                    <?php if(isset($_SESSION['auth']) && $role == "user") {?>
                        <button type = "submit">Подробнее</button>
                    <?php } else { ?>
                    <?php } ?>
                </div>
            </form>
        <?php } ?>
    </div>
    <!-- Пагинация -->
    <nav class="nav" aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li> 
            <!-- $result_1 это вывод всех товаров  -->
            <?php
            for ($i = 1; $i <= ceil(mysqli_num_rows($check) / $paginate_count); $i++) { ?>
                <li class="page-item"><a class="page-link" href="?page=<?=$i?>&id=<?=$cat_id?>"><?=$i?></a></li>
            <?php } ?>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
<?php require_once "footer.php";?>

</body>
</html>