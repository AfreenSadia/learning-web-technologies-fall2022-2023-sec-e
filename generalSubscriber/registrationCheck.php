<?php 

    if(isset($_POST['submit']))
    {
        if($_POST['submit'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_POST['submit'] == 'null'){
            echo "null username/password";
        }

        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        if($username == "" || $password == "" || $email == "") {
            header('location: registration.php?err=null');
        }else{
            $user = ['username'=> $username, 'password'=>$password, 'email'=>$email];
            $_SESSION['user'] = $user;
            $user = $username."|".$password."|".$email."\r\n";
            $file = fopen('user.txt', 'a');
            fwrite($file, $user);
            fclose($file);
            header('location: login.php');
        }
    }
?>