<?php 
require_once "../includes/nav_agent.php";
require_once "../database/Query.php";

$user = new Query;

$order = $user -> order();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table" style="width: 80vw; margin: 0 auto;">
        <thead>
            <tr>
            <th scope="col">Номер заявки</th>
            <th scope="col">Название страховки</th>
            <th scope="col">ФИО клиента</th>
            <th scope="col">Статус</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($order as $item) { ?>
                <tr>
                    <td><?=$item[8]?></td>
                    <td><?=$item[16]?></td>
                    <td><?=$item[1]?></td>
                    <?php if($item[14] == "Новая") { ?>
                        <td><button class="btn btn-success"><a href="agent_order_db.php?id=<?=$item[9]?>&status=Одобрена&price=<?=$item[11]?>&validity_period=<?=$item[13]?>&FIO=<?=$item[1]?>&ins_name=<?=$item[16]?>&id_order=<?=$item[8]?>">Одобрить</a></button>
                        <button class="btn btn-danger"><a href="agent_order_db.php?id=<?=$item[9]?>&status=Отклоненна&ins_name=<?=$item[16]?>">Отклонить</a></button></td>
                    <?php } else { ?>
                        <td><?=$item[14]?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>