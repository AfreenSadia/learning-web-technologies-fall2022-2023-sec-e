<?php 
    require_once(__DIR__.'/../db_conn.php');

    function insertUser($user) {
        $connection = getConnection();
        $sqlQuery = "INSERT INTO user(Id,Name, Email, Password, Type) 
        VALUES ('{$user['id']}','{$user['name']}','{$user['email']}','{$user['password']}'}','admin')";

        $status = mysqli_query($connection, $sqlQuery);
        return $status;
    }
?>