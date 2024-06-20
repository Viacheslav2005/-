<?php
require_once "../includes/nav_admin.php";
require_once "../database/Admin.php";

$user = new Admin();

$news = $user -> news();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../design/css/reset.css">
    <link rel="stylesheet" href="../design/css/admin_client.css">
    <link rel="stylesheet" href="../design/css/admin_insurance.css">
</head>
<body>
    <form action="admin_news_db.php" method="POST" enctype="multipart/form-data" class="form_news">
        <div class="mb-3">
            <input type="text" name = "descr" placeholder="Текст новости" class="form-control">
        </div>
        <div class="mb-3">
            <input type="date" name="date" id="" placeholder="Дата" class="form-control">
        </div>
        <div class="mb-3">
            <input type="file" name="img" id="" placeholder="" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
    <div class="news_cards1">
        <div class="news_card">
            <?php foreach($news as $item) { ?>
                    <div>
                        <img src="/design/img/<?=$item[3]?>" alt="" class="news_card_img">
                        <p><?=$item[1]?></p>
                        <p><img src="/design/img/calendar.png" alt=""><?=$item[2]?></p>
                        <button><a href="admin_news_delete.php?id_new=<?=$item[0]?>">Удалить</a></button>
                    </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>