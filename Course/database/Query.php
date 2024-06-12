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
    public function insurance_nou() {
        $query = "SELECT * FROM `insurance`";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }
    public function insurance() {
        $query = "SELECT * FROM `insurance`";
        $result = mysqli_fetch_all(mysqli_query($this->connection, $query));
        return $result;
    }
    public function insurance_off() {
        $query = "SELECT * FROM `insurance` ";
        $result = mysqli_fetch_all(mysqli_query($this->connection, $query));
        return $result;
    }
    public function coverage($id) {
        $query = "SELECT * FROM `insurance` WHERE `category_id` = '$id'";
        $result = mysqli_fetch_all(mysqli_query($this->connection, $query));
        return $result;
    }

    public function sort($cat_id, $paginate_count) {
        $query = "SELECT * FROM `insurance` ORDER BY `category_id` = $cat_id DESC LIMIT $paginate_count";
        return mysqli_fetch_all(mysqli_query($this -> connection, $query));
    }

    public function search($ins_name, $paginate_count) {
        // $check = mysqli_num_rows(mysqli_query($this -> connection, "SELECT * FROM `insurance`"));
        $query = "SELECT * FROM `insurance` WHERE `insurance_name` LIKE '%$ins_name%' LIMIT $paginate_count";
        $result = mysqli_fetch_all(mysqli_query($this->connection, $query));
        return $result;
    }

    // public function sort_search($cat_id, $ins_name) {
    //     $query = "SELECT * FROM `insurance` WHERE `insurance_name` LIKE '%$ins_name%' AND ORDER BY `category_id` = $cat_id DESC";
    //     $result = mysqli_fetch_all(mysqli_query($this->connection, $query));
    //     return $result;
    // }

    public function all_cat_page($page,$paginate_count)
    {
        $offset = $page * $paginate_count - $paginate_count;
        $query = "SELECT * from `insurance`";
        $result = "LIMIT $paginate_count OFFSET $offset";
        $result_1 = mysqli_query($this->connection, $query . $result);
        return  $result_1;
    }
    public function news() {
        $query  = "SELECT * FROM `news`";
        return mysqli_fetch_all(mysqli_query($this -> connection, $query));
    }
}
?>