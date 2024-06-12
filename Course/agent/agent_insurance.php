<?php 
require_once "../includes/nav_agent.php";
require_once "../database/Query.php";

$user = new Query();

$cat_id = isset($_GET["cat_id"])? $_GET["cat_id"] : 0;

$ins_name = isset($_GET["search"])? $_GET["search"] : false;

$page =  isset($_GET['page']) ? $_GET['page'] : 1;

$cat = $user -> categories();

$ins = $user -> insurance();

$check = $user -> insurance_nou();

$paginate_count = 3;

$sort = $user -> sort($cat_id, $paginate_count);

$search = $user -> search($ins_name, $paginate_count);

$result_1= $user -> all_cat_page($page, $paginate_count);

// $param = "";

// if($cat_id) {
//     $param .= "cat_id=$cat_id";
//     $sort = $user -> sort($cat_id, $paginate_count);
// }
// if($ins_name) {
//     $param .= "cat_id=$cat_id";
//     $search = $user -> search($ins_name, $paginate_count);
// }
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
    <form action="" method="GET">
        <input type="text" name = "search" placeholder="Поиск">
        <input type="submit">
    </form>
</div>
<div class="div_programs"> 
    <!-- вывод поиска -->
    <?php if($ins_name)  { ?> 
        <?php foreach($search as $item) { ?>
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
                    </div>
                </div>
                <button type="button" class="head_but" onclick="document.location='agent_insurance_up.php?id=<?=$item[0]?>'">Изменить</button>
            </div>
        <?php } ?>
        <!-- вывод всех записей без поиска и сортировки (не работает почему)-->
    <?php } if($cat_id == false) { ?>
        <?php foreach(mysqli_fetch_all($result_1) as $item) { ?>
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
                    </div>
                </div>
                <button type="button" class="head_but" onclick="document.location='agent_insurance_up.php?id=<?=$item[0]?>'">Изменить</button>
            </div>
        <?php } ?>
        <!-- вывод по категориям -->
    <?php } if($cat_id) {  ?>
        <?php foreach($sort as $item) { ?>
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
                    </div>
                </div>
                <button type="button" class="head_but"  onclick="document.location='agent_insurance_up.php?id=<?=$item[0]?>'">Изменить</button>
            </div>
        <?php } ?>
    <?php } ?>
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
                <li class="page-item"><a class="page-link" href="?page=<?=$i?>&search=<?=$ins_name?>&cat_id=<?=$cat_id?>">
                        <?=$i?></a></li>
            <?php } ?>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
    <button onclick="document.location = 'agent_insurance.php'">Очистить форму поиска</button>
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