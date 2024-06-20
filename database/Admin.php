<?php
require_once "connectdb.php";
session_start();
class Admin extends Connect
{

    protected $name_cat;

    protected $image_cat;

    protected $check;

    protected $id;

    protected $name;

    protected $phone;

    protected $email;

    protected $pass;

    protected $name_news;

    protected $date_news;

    protected $file_news;

    protected $check_update = false;

    public function categories()
    {
        $query = "SELECT * FROM `category`";
        $result = mysqli_fetch_all(mysqli_query($this->connection, $query));
        return $result;
    }
    public function category($id)
    {
        $query = "SELECT * FROM `category` WHERE `category_id` = $id";
        $result = mysqli_fetch_assoc(mysqli_query($this->connection, $query));
        return $result;
    }

    public function add_agent($name_agent, $phone_agent, $email_agent, $pass)
    {
        $query = "SELECT * FROM `users` WHERE `email` = '$email_agent'";
        $this->check = mysqli_query($this->connection, $query);
        if (mysqli_num_rows($this->check) == 0) {
            $_SESSION["message"] = "Агент успешно создан";
            return mysqli_query($this->connection, "INSERT INTO `users`(`FIO`,`phone`, `email`, `password`, `role`) VALUES ('$name_agent','$phone_agent','$email_agent','$pass','agent')");
        } else {
            $_SESSION["message"] = "Ошибка добавления";
        }
    }

    

    public function update($id, $name, $phone, $email, $pass)
    {
        $query1 = mysqli_fetch_assoc(mysqli_query($this->connection, "SELECT * FROM `users` WHERE `id_user` = '$id'"));
        $query = "UPDATE `users` SET ";
        if ($query1["FIO"] != $name) {
            $query .= " `FIO`='$name', ";
            $this->check_update = true;
        }
        if ($query1["phone"] != $phone) {
            $query .= " `phone`='$phone', ";
            $this->check_update = true;
        }
        if ($query1["email"] != $email) {
            $query .= " `email`='$email', ";
            $this->check_update = true;
        }
        if ($query1["password"] != $pass) {
            $query .= " `password`='$pass', ";
            $this->check_update = true;
        }

        if ($this->check_update) {
            $query = substr($query, 0, -2);
            $query .= " WHERE `id_user` = $id";
            $result = mysqli_query($this->connection, $query);
            if ($result) {
                return $_SESSION["message"] = "Данные обновленны";
            }
        } else {
            return $_SESSION["message"] = "Данные актуальны";
        }
    }

    public function delete($id) {
        $query = "SELECT * FROM `users` WHERE `id_user` = $id";
        $this -> check = mysqli_query($this->connection, $query);
        if (mysqli_num_rows($this->check) == 1) {
            $_SESSION["message"] = "Удаление успешно";
            return mysqli_query($this->connection, "DELETE FROM `users` WHERE `id_user` = $id");
        } else {
            $_SESSION["message"] = "Ошибка удаления";
        }
    }

    public function add_category($name_cat, $image_cat)
    {
        $this->check = mysqli_query($this->connection, "SELECT * FROM `category` WHERE `category_name` = '$name_cat'");
        $file = $image_cat["name"];
        $query = "INSERT INTO `category`(`category_name`, `image`) VALUES ('$name_cat','$file')";
        if (mysqli_num_rows($this->check) == 0) {
            move_uploaded_file($image_cat["tmp_name"] , "../design/img/" . $file);
            $_SESSION["message"] = "Категория успешно добавлена";
            return mysqli_query($this->connection, $query);
        } else {
            $_SESSION["message"] = "Данная категория уже существует!";
        }
    }

    public function update_category($id, $name_cat, $image_cat) {
        $query1 = mysqli_fetch_assoc(mysqli_query($this->connection, "SELECT * FROM `category` WHERE `category_id` = $id"));
        $query = "UPDATE `category` SET ";
        var_dump($id);
        var_dump($name_cat);
        var_dump($image_cat);
        if ($query1["category_name"] != $name_cat) {
            $query .= " `category_name`='$name_cat', ";
            $this->check_update = true;
        }
        if ($query1["image"] != $image_cat) {
            $file = $image_cat["name"];
            $query .= " `image`= '" . $file . "', ";
            move_uploaded_file($image_cat['tmp_name'], "../design/img/" . $image_cat['name']);
            $this->check_update = true;
        }

        if ($this->check_update) {
            $query = substr($query, 0, -2);
            $query .= " WHERE `category_id` = $id";
            $result = mysqli_query($this->connection, $query);
            if ($result) {
                return $_SESSION["message"] = "Данные обновленны";
            }
        } else {
            return $_SESSION["message"] = "Данные актуальны";
        }
    }

    public function delete_category($id) {
        $query = "DELETE FROM `category` WHERE `category_id` = '$id'";
        $result = mysqli_query($this -> connection, $query);
        return $result;
    }

    public function create_news($name_news, $date_news, $file_news) {
        $file = $file_news["name"];
        $query1 = mysqli_query($this -> connection, "SELECT * FROM `news` WHERE `descr` = '$name_news'");
        if(mysqli_num_rows($query1) == 0) {
            $query = "INSERT INTO `news`(`descr`, `date_of_publication`, `image`) VALUES ('$name_news','$date_news', '$file')";
            move_uploaded_file($file_news['tmp_name'], "../design/img/" . $file);
            $_SESSION["message"] = "Новость успешно создана";
            return mysqli_query($this->connection, $query);
        } else {
            $_SESSION["message"] = "Данная новость уже существует!";
        }
    }
    
    public function delete_news($id_new) {
        $query = "DELETE FROM `news` WHERE `id_news` = $id_new";
        return mysqli_query($this->connection, $query);
    }

    public function news() {
        $query  = "SELECT * FROM `news`";
        return mysqli_fetch_all(mysqli_query($this -> connection, $query));
    }

    public function add_insurance($ins_name, $ins_price, $cat_id, $descr) {
        $query = "SELECT * FROM `insurance` WHERE `insurance_name` = '$ins_name'";
        $this -> check = mysqli_query($this -> connection, $query);
        if(mysqli_num_rows($this->check) == 0) {
            $_SESSION["message"] = "Полис создан";
            return mysqli_query($this->connection, "INSERT INTO `insurance`(`insurance_name`, `price`, `category_id`, `description`) VALUES ('$ins_name','$ins_price','$cat_id','$descr')");
        } else {
            $_SESSION["message"] = "Ошибка добавления";
        }
    }

    public function update_insurance($id, $ins_name, $ins_price, $ins_amount, $cat_id, $descr, $valid_period) {
        $ins_amount = $ins_price * $valid_period;
        $query1 = mysqli_fetch_assoc(mysqli_query($this->connection, "SELECT * FROM `insurance` WHERE `insurance_id` = '$id'"));
        $query = "UPDATE `insurance` SET ";
        if ($query1["insurance_name"] != $ins_name) {
            $query .= " `insurance_name`='$ins_name', ";
            $this->check_update = true;
        }
        if ($query1["price"] != $ins_price) {
            $query .= " `price`= '$ins_price', ";
            $this->check_update = true;
        }
        if ($query1["insurance_amount"] != $ins_amount) {
            $query .= " `insurance_amount`='$ins_amount', ";
            $this->check_update = true;
        }
        if ($query1["category_id"] != $cat_id) {
            $query .= " `category_id`='$cat_id', ";
            $this->check_update = true;
        }
        if ($query1["description"] != $descr) {
            $query .= " `description`='$descr', ";
            $this->check_update = true;
        }
        if ($query1["validity_period"] != $valid_period) {
            $query .= " `validity_period`='$valid_period', ";
            $this->check_update = true;
        }

        if ($this->check_update) {
            $query = substr($query, 0, -2);
            $query .= " WHERE `insurance_id` = '$id'";
            $result = mysqli_query($this->connection, $query);
            if ($result) {
                return $_SESSION["message"] = "Данные обновленны";
            }
        } else {
            return $_SESSION["message"] = "Данные актуальны";
        }
    }
}
