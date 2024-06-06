<?php 
require_once "../includes/nav_agent.php";
require_once "../database/Query.php";

$user = new Query();

$result = $user -> users();

$cat = $user -> categories();

// $ins = $user -> insurance();

$ins = $user -> sort($_GET["cat_id"]);

$sort = $user -> sort($_GET["cat_id"]);
?>

<head>
    <link rel="stylesheet" href="../design/css/reset.css">
    <link rel="stylesheet" href="../design/css/agent_update.css">
</head>

<p class="p1">Обновление полиса</p>

<div class="div_select">
    <p>Выбор  страхования</p>
    <form action="" method="GET">
        <select name="cat_id" id="">
            <option value="0">Все</option>
            <?php foreach($cat as $item) { ?>
                <option value="<?=$item[0]?>"><a href="agent_insurance_sort.php?cat_id=<?=$item[0]?>"><?=$item[1]?></a></option>
            <?php } ?>
        </select>
        <input type="submit" value="Отфильтровать">
    </form>
</div>

<div class="div_programs">
    <?php foreach($ins as $item) { ?>
        <div class="div_programm">
            <div class="div_programm_div1">
                <p><?=$item[1]?></p>
                <p><span><?=$item[2]?>₽</span>/<?=$item[6]?> месяцев</p>
                <p>Страховая сумма</p>
                <span><?=$item[3]?>₽</span>
            </div>
            <div class="div_descr1">
                <div class="div_descr2">
                    <p><?=$item[5]?></p>
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
            <button type="button" class="head_but"><a href="agent_insurance_up.php?id=<?=$item[0]?>">Изменить</a></button>
        </div>
    <?php } ?>
    <!-- <div class="div_programm">
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
        <button>Изменить</button>
    </div> -->
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Обновление полиса</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="agent_insurance_up.php" method="POST">
        <div class="modal-body">
            <div>
                <p>Выбор страхования</p>
                <select name = "cat_id" id="" class="modal-body-input">
                    <?php foreach($cat as $item) { ?>
                        <option value="<?=$item[0]?>"><?=$item[1]?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <p>Название</p>
                <input type="text" name = "name" class="modal-body-input">
            </div>
            <div>
                <p>Стоимость</p>
                <input type="text" name = "price" class="modal-body-input">
            </div>
            <div>
                <p>Описание</p>
                <input type="text" name = "descr" class="modal-body-input">
            </div>
            <div>
                <p>Срок действия</p>
                <select name = "validity_period" id="">
                    <option value="1">1</option>
                    <option value="6">6</option>
                    <option value="12">12</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
      </form>
    </div>
  </div>
</div>