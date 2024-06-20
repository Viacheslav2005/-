<?php 
require_once "../database/Agent.php";

$agent = new Agent;
$adds = new File;
$id = $_GET["id"];
$status = $_GET["status"];
$ins_name = $_GET["ins_name"];
$FIO = $_GET["FIO"];
$price = $_GET["price"];
$valid_period = $_GET["validity_period"];
$id_order = $_GET["id_order"];

if(isset($id) && isset($status) && isset($ins_name)) {
    if($status == "Одобрена") {
        // var_dump($id, $status, $ins_name, $FIO, $price, $valid_period, $id_order);
        $up = $agent -> orders_update($id, $status, $ins_name, $FIO, $price, $valid_period, $id_order);
        $add = $adds -> file_add($ins_name, $FIO, $price, $valid_period, $id_order);
        $_SESSION["message"] = "Одобрена, письмо отправлено на почту";
        header("location: /agent/agent_order.php");
    } else {
        $up = $agent -> orders_update($id, $status, $ins_name, $FIO, $price, $valid_period, $id_order);
        $_SESSION["message"] = "Отклоненна";
        header("location: /agent/agent_order.php");
    }
} else {
    $_SESSION["message"] = "Ошибка";
    header("location: /agent/agent_order.php");
}
?>