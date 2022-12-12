<?php
    require_once(__DIR__.'/../../model/user/registration_model.php');

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if($id == null || $id == "") {
        echo "Id is required";
    } else if($name == null || $name == "") {
        echo "Name is required";
    } else if($email == null || $email == "") {
        echo "Email is required";
    } else if($password == null || $password == "") {
        echo "Password is required";
    } else if($confirmPassword == null || $confirmPassword == "") {
        echo "Confirm Password is required";
    }  else if($password != $confirmPassword) {
        echo "Password and Confirm Password do not match";
    } else if(strlen($password) < 4){
        echo "Password must not be less than four (4) characters";
    } 
    else {
        $user = ['id'=>$id,'name'=>$name, 'email'=>$email, 'password'=>$password, 'confirmPassword'=>$confirmPassword];
        $status = insertUser($user);

        if($status)
        {
            echo $status;
            header("Location: ../../index.php");
        }
        else 
        {
             echo "Failed to save user in database";
        }
    }
?>