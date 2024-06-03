<?php
require_once "connectdb.php";
session_start();
class Agent extends Connect {
    protected $ins_name;

    protected $ins_price;

    protected $cat_id;

    protected $descr;

    protected $valid_period;

    protected $check;

    protected $check_update = false;

    public function add_insurance($ins_name, $ins_price, $cat_id, $descr, $valid_period) {
        $query = "SELECT * FROM `insurance` WHERE `insurance_name` = '$ins_name'";
        $this -> check = mysqli_query($this -> connection, $query);
        if(mysqli_num_rows($this->check) == 0) {
            $_SESSION["message"] = "Полис создан";
            return mysqli_query($this->connection, "INSERT INTO `insurance`(`insurance_name`, `price`, `insurance_amount`, `category_id`, `description`, `validity_period`) VALUES ('$ins_name','$ins_price','$ins_price','$cat_id','$descr','$valid_period')");
        } else {
            $_SESSION["message"] = "Ошибка добавления";
        }
    }
    public function update_insurance($ins_name, $ins_price, $cat_id, $descr, $valid_period) {
        $query1 = mysqli_fetch_assoc(mysqli_query($this->connection, "SELECT * FROM `insurance` WHERE `insurance_name` = '$ins_name'"));
        $query = "UPDATE `insurance` SET ";
        if ($query1["insurance_name"] != $ins_name) {
            $query1 .= " `insurance_name`='$ins_name', ";
            $this->check_update = true;
        }
        if ($query1["price"] != $ins_price) {
            $query1 .= " `price`='$ins_price', ";
            $this->check_update = true;
        }
        if ($query1["category_id"] != $cat_id) {
            $query1 .= " `category_id`='$cat_id', ";
            $this->check_update = true;
        }
        if ($query1["description"] != $descr) {
            $query1 .= " `description`='$descr', ";
            $this->check_update = true;
        }
        if ($query1["validity_period"] != $valid_period) {
            $query1 .= " `validity_period`='$valid_period', ";
            $this->check_update = true;
        }

        if ($this->check_update) {
            $query = substr($query, 0, -2);
            $query .= " WHERE `insurance_name` = $ins_name";
            $result = mysqli_query($this->connection, $query);
            if ($result) {
                return $_SESSION["message"] = "Данные обновленны";
            }
        } else {
            return $_SESSION["message"] = "Данные актуальны";
        }
    }

}


?>