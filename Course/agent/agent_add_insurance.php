<?php
require_once "../database/Agent.php";

$agent = new Agent;

if($agent->add_insurance($_POST["ins_name"], $_POST["ins_price"], $_POST["cat_id"], $_POST["descr"], $_POST["valid_period"])) {
    header("Location: /agent/agent_insurance.php");
    exit();
} else {
    header("Location: /agent/agent_insurance.php");
    exit();
}
?>