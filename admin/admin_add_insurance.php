<?php
require_once "../database/Admin.php";

$agent = new Admin;

if($agent->add_insurance($_POST["ins_name"], $_POST["ins_price"], $_POST["cat_id"], $_POST["descr"])) {
    header("Location: /admin/admin_insurance_polis.php");
    exit();
} else {
    header("Location: /admin/admin_insurance_polis.php");
    exit();
}
?>