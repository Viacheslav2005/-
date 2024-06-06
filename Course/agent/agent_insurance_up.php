<?php 
require_once "../includes/nav_agent.php";
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
<form action="agent_insurance_up_db.php" method="POST">
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
                    <p><span>Страховые выплаты <input type="text" name="amount" id="" value="<?=$item[3]?>">₽</span></p>
                    <p>Срок действия</p>
                        <select name = "validity_period" id="">
                            <option value="1">1</option>
                            <option value="6">6</option>
                            <option value="12">12</option>
                        </select>
                    <!-- <p>Страховая сумма</p>
                    <span><input type="text" name="" id="" value="<?=$item[3]?>₽"></span> -->
                </div>
                <div class="div_descr1">
                    <div class="div_descr2">
                        <p><input type="text" name="descr" id="" value="<?=$item[5]?>"></p>
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
    <?php } ?>
</form>
</div>
