<?php 
require_once "../includes/nav_admin.php";
require_once "../database/Admin.php";

$category = new Admin();

$result = $category -> categories();
?>
<head>
    <link rel="stylesheet" href="../design/css/reset.css">
    <link rel="stylesheet" href="../design/css/admin_client.css">
    <link rel="stylesheet" href="../design/css/admin_insurance.css">
</head>
<p class="p1">Виды страхования</p>

<div class="cards">
    <?php foreach($result as $item) {?>
      <div class="card">
        <div class="card1">
            <p><?=$item[1]?></p>
            <button class="but1"><a href="admin_insurance_up.php?id=<?=$item[0]?>">Изменить</a></button>
        </div>
        <div>
            <img src="../design/img/<?=$item[2]?>" alt="">
        </div>
    </div>
    <?php } ?>
    
</div>
<button class="but_add"  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Создать</button>

<!-- Обновление  -->
<!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Обновление страхования</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="admin_insurance_up.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div>
              <p>Название</p>
              <input type="text" name = "name" class="modal-body-input" name="" id="">
          </div>
          <div>
              <p>Изображение</p>
              <input type="file" name = "img" class="modal-body-input" name="" id="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Создать</button>
        </div>
      </form>
    </div>
  </div>
</div> -->
<!-- Создание  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Создание страхования</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="admin_insurance_add.php" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
              <div>
                  <p>Название</p>
                  <input type="text" name = "name" class="modal-body-input" name="" id="">
              </div>
              <div>
                  <p>Изображение</p>
                  <input type="file" name = "img" class="modal-body-input" name="" id="">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" placeholder="Создать">Создать</button>
          </div>
        </form>
    </div>
  </div>
</div>