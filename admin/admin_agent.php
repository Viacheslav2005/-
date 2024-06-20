<?php 
require_once "../includes/nav_admin.php";

session_start();
require_once "../database/Query.php";

$user = new Query();

$result = $user -> agents();

if (isset($_SESSION["message"])) {
    $mess = $_SESSION["message"];
    echo "<script>alert('$mess')</script>";
    unset($_SESSION["message"]);
}
?>
<head>
    <link rel="stylesheet" href="../design/css/reset.css">
    <link rel="stylesheet" href="../design/css/admin_client.css">
</head>
<p class="p1">Агенты</p>

<div class="table_div">
    <table>
        <thead>
            <tr>
                <td>ФИО</td>
                <td>Телефон</td>
                <td>Логин</td>
                <td>Изменить</td>
                <td>Удалить</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $item) { ?>
                <tr>
                    <form action = "admin_agent_up.php" method="POST">
                        <td><input type="hidden" name = "id" value="<?=$item[0]?>"><input type="text" name = "FIO" value="<?=$item[1]?>"></td>
                        <td><input type="text" name = "phone" value="<?=$item[3]?>"></td>
                        <td><input type="text" name = "email" value="<?=$item[4]?>"></td>
                        <td><button type="submit"><img src="../design/img/Change.png" alt=""></button></td>
                    </form>
                    <td><a href="admin_agent_delete.php?id=<?=$item[0]?>"><img src="../design/img/Delete.png" alt=""></a></td>                
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"><img src="/design/img/plus1.png" alt=""></button>
</div>


<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Создание агента</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="admin_agent_add.php" method="POST">
        <div class="modal-body">
            <div>
                <p>ФИО</p>
                <input type="text" name = "FIO" class="modal-body-input" name="" id="" required>
            </div>
            <div>
                <p>Телефон</p>
                <input type="number" name = "phone" class="modal-body-input" name="" id="" minlength="11" maxlength="11" required>
            </div>
            <div>
                <p>Логин</p>
                <input type="text" name = "email" class="modal-body-input" name="" id="" required>
            </div>
        </div>  

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </form>
    </div>
  </div>
</div>
