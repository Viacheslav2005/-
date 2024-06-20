<?php 
require_once "../includes/nav_admin.php";
require_once "../database/Query.php";

$user = new Query();

$result = $user -> users();

$cat = $user -> categories();

$ins = $user -> insurances($_GET["id"]);
?>

<head>
    <link rel="stylesheet" href="../design/css/reset.css">
    <link rel="stylesheet" href="../design/css/agent_update.css">
</head>

<div class="div_programs">
<form action="admin_insurance_polis_up_db.php" method="POST">
    <?php foreach($ins as $item) { ?>
            <div class="div_programm">
                <div class="div_programm_div2">
                    <input type="hidden" name = "id" value="<?=$item[0]?>">
                    <p><input type="text" name="name" id="" value="<?=$item[1]?>"></p>
                    <select name = "cat_id" id="" class="modal-body-input">
                        <?php foreach($cat as $item1) { ?>
                            <option value="<?=$item1[0]?>"><?=$item1[1]?></option>
                        <?php } ?>
                    </select>
                    <p><span>Цена <input type="text" name="price" id="" value="<?=$item[2]?>">₽</span></p>
                    <!-- <p><span>Страховые выплаты <input type="text" name="amount" id="" value="<?=$item[3]?>">₽</span></p> -->
                    <!-- <p>Страховая сумма</p>
                    <span><input type="text" name="" id="" value="<?=$item[3]?>₽"></span> -->
                </div>
                <div class="div_descr1">
                    <div class="div_descr2">
                        <textarea name="descr" id="" rows="5" ><?=$item[4]?></textarea>
                        <!-- <p><input type="text" name="descr" id="" value="<?=$item[4]?>"></p> -->
                        <!-- <p>Отделка</p> -->
                        <!-- <p>400 000₽</p> -->
                    </div>
                    <!-- <div class="div_descr2">
                        <p>Домашнее имущество</p>
                        <p>400 000₽</p>
                    </div>
                    <div class="div_descr2">
                        <p>Гражданская ответственность</p>
                        <p>400 000₽</p>
                    </div> -->
                </div>
                <button type="submit" class="head_but">Изменить</a></button>
            </div>
        <a href="admin_insurance_polis_delete.php?id=<?=$item[0]?>" style = "margin: 0 auto;">Удалить</a>
    <?php } ?>
</form>
</div>
