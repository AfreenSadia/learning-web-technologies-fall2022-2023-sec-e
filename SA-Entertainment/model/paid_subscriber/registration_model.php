<?php 
    require_once(__DIR__.'/../db_conn.php');

    function insertUser($user) {
        $connection = getConnection();
        $sqlQuery = "INSERT INTO user(Email, Name, Password, Gender, Biography, DOB, Picture, Type) 
        VALUES ('{$user['email']}','{$user['name']}','{$user['password']}','{$user['gender']}','','{$user['dob']}','','paid_subscriber')";

        $status = mysqli_query($connection, $sqlQuery);
        return $status;
    }
?>