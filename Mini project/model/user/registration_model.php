<?php 
    require_once(__DIR__.'/../db_conn.php');

    function insertUser($user) {
        $connection = getConnection();
        $sqlQuery = "INSERT INTO user(Id,Email, Name, Password,Type) 
        VALUES ('{$user['id']}','{$user['email']}','{$user['name']}','{$user['password']}'}','','user')";

        $status = mysqli_query($connection, $sqlQuery);
        return $status;
    }
?>