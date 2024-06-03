<?php
session_start();
require_once "connectdb.php";
class Query extends Connect {
    public function user() {
        $query = "SELECT * FROM `users` WHERE `id_user` = " . $_SESSION['user_id'];
        $result = mysqli_fetch_all(mysqli_query($this -> connection, $query));
        return $result;
    }
    public function users() {
        $query = "SELECT * FROM `users` WHERE `role` = 'user'";
        $result = mysqli_fetch_all(mysqli_query($this -> connection, $query));
        return $result;
    }
    public function agents() {
        $query = "SELECT * FROM `users` WHERE `role` = 'agent'";
        $result = mysqli_fetch_all(mysqli_query($this -> connection, $query));
        return $result;
    }
    public function categories()
    {
        $query = "SELECT * FROM `category`";
        $result = mysqli_fetch_all(mysqli_query($this->connection, $query));
        return $result;
    }
    public function insurances() {
        $query = "SELECT * FROM `insurance` WHERE `` = ''";
        $result = mysqli_fetch_all(mysqli_query($this->connection, $query));
        return $result;
    }
    public function insurance() {
        $query = "SELECT * FROM `insurance`";
        $result = mysqli_fetch_all(mysqli_query($this->connection, $query));
        return $result;
    }
    // public function agent($name) {
    //     $query = "SELECT * FROM `users` WHERE `role` = 'agent' WHERE `FIO` = '$name'";
    //     $result = mysqli_fetch_all(mysqli_query($this->connection, $query));
    //     return $result;
    // }
}
?>