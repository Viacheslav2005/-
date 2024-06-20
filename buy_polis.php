<?php 
session_start();
require_once "includes/nav_user.php";
require_once "database/Query.php";

$cover = new Query();

$coverage = $cover -> insurance_assoc($_POST["id"]);

$validity_period = $_POST["validity_period"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/design/css/reset.css">
    <link rel="stylesheet" href="/design/css/property.css">
    <title>Document</title>
</head>
<body>
    <div class="card_div">
        <?php foreach($coverage as $item) {?>
            <form action="/user/add_order.php" method="POST">
                <div class="div_programms">
                    <div class="div_programms_div1">
                        <input type="hidden" name="id" value = "<?=$item[0]?>">
                        <p><?=$item[1]?></p>
                        <!-- <p><input readonly type="text" name="name" id="" value="<?=$item[1]?>"></p> -->
                        <div class="valid_period">
                            <p><span><?=$item[2]?>₽</span>/1 месяц</p>
                            <!-- <span><input type="text" readonly name="price" id="" value="<?=$item[2]?>">₽</span>/ <input readonly type="text" name="" id="" value = "<?=$item[6]?>"  class="month"> месяцев -->
                        </div>
                        <p>Период</p>
                        <input type="number" readonly name = "validity_period" value = "<?=$validity_period?>" style="text-align: center;" minlength="1">
                        
                        <input type="hidden" value = "<?=$item[2] * $validity_period?>" name="total_price">
                        <span>Общая цена: <?=$item[2] * $validity_period?>₽</span>
                        <p><textarea name="" id="" cols="30" rows="5"><?=$item[4]?></textarea></p>
                    </div>
                    <div class="div_descrs3">
                        <!-- <p><input readonly type="text" name="descr" id="" value = "<?=$item[5]?>"></p> -->
                        <!-- <p><?=$item[4]?></p> -->
                        <!-- <textarea readonly name="descr" id="" value = "<?=$item[5]?>" rows="5" cols="28"><?=$item[5]?></textarea> -->
                    </div>
                    <button type = "submit">Оформить полис</button>
                </div>
            </form>
        <?php } ?>
    </div>
</body>
</html>