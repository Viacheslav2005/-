<?php 
require_once "../includes/nav_agent.php";
session_start();
require_once "../database/Query.php";

$user = new Query();

$result = $user -> users();

?>

<head>
    <link rel="stylesheet" href="../design/css/reset.css">
    <link rel="stylesheet" href="../design/css/admin_client.css">
</head>
<p class="p1">Клиенты</p>

<table>
    <thead>
        <tr>
            <td>ФИО</td>
            <td>Телефон</td>
            <td>Логин</td>
            <td>Пароль</td>
            <td>Изменить</td>
            <td>Удалить</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $item) { ?>
            <tr>
                <form action = "agent_client_up.php" method="POST">
                    <td><input type="hidden" name = "id" value="<?=$item[0]?>"><input type="text" name = "FIO" value="<?=$item[1]?>"></td>
                    <td><input type="text" name = "phone" value="<?=$item[3]?>"></td>
                    <td><input type="text" name = "email" value="<?=$item[4]?>"></td>
                    <td><input type="text" name = "password" value="<?=$item[5]?>"></td>
                    <td><button type="submit"><img src="../design/img/Change.png" alt=""></button></td>
                </form>
                <td><a href="agent_client_delete.php?id=<?=$item[0]?>"><img src="../design/img/Delete.png" alt=""></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Создание полиса</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
            <p>Выбрать страхование</p>
            <select name="" id="" class="modal-body-input">
                <option value="">Выбор</option>
            </select>
        </div>
        <div>
            <p>Название</p>
            <input type="text" class="modal-body-input" name="" id="">
        </div>
        <div>
            <p>Стоимость</p>
            <input type="text" class="modal-body-input" name="" id="">
        </div>
        <div>
            <p>Описание</p>
            <input type="text" class="modal-body-input" name="" id="">
        </div>
        <div>
            <p>Срок действия</p>
            <input type="text" class="modal-body-input" name="" id="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Создать</button>
      </div>
    </div>
  </div>
</div> -->