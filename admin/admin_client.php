<?php 
require_once "../includes/nav_admin.php";

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
            <td>Удалить</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $item) { ?>
            <tr>
                <form action = "admin_client_up.php" method="POST">
                    <td><input type="hidden" name = "id" value="<?=$item[0]?>"><input type="text" name = "FIO" value="<?=$item[1]?>"></td>
                    <td><input type="text" name = "phone" value="<?=$item[3]?>"></td>
                    <td><input type="text" name = "email" value="<?=$item[4]?>"></td>
                </form>
                <td><a href="admin_client_delete.php?id=<?=$item[0]?>"><img src="../design/img/Delete.png" alt=""></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>    