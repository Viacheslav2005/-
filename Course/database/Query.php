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
    public function insurances($id) {
        $query = "SELECT * FROM `insurance` WHERE `insurance_id` = '$id'";
        $result = mysqli_fetch_all(mysqli_query($this->connection, $query));
        return $result;
    }
    public function insurance() {
        $query = "SELECT * FROM `insurance`";
        $result = mysqli_fetch_all(mysqli_query($this->connection, $query));
        return $result;
    }
    public function coverage($id) {
        $query = "SELECT * FROM `insurance` WHERE `category_id` = '$id'";
        $result = mysqli_fetch_all(mysqli_query($this->connection, $query));
        return $result;
    }
    // public function paginate() {
    //     $count = 3;
    //     $query = mysqli_query($this->connection, "SELECT * FROM `insurance`");
    //     $page =  isset($_GET['page']) ? $_GET['page'] : 1;
    //     $offset = $page * $count - $count;
    //     $news =  mysqli_query($this->connection, $query. " LIMIT $count OFFSET $offset" ); // запрос на лимит записей
    //     $count_news = mysqli_query($this->connection, $news);
    //     return $count_news;
    // }

    public function sort($cat_id) {
        $query = "SELECT * FROM `insurance` ORDER BY `category_id` = $cat_id";
        return mysqli_fetch_all(mysqli_query($this -> connection, $query));
    }
}
?>