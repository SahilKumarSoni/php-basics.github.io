<?php
    session_start();
    include 'config.php';

    if(isset($_POST['ok'])){
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashedPassword = password_hash($password,PASSWORD_BCRYPT);
        $status = 0;

        $sql = "INSERT INTO `user` (`name`,`mobile`,`email`,`username`,`password`,`status`) VALUES ('$name','$mobile','$email','$username','$hashedPassword','$status')";

        if(mysqli_query($conn,$sql)){
            $_SESSION['name'] = 'Data Inserted';
            header('location:../index.php');
        } else {
            echo "ERROR!!".mysqli_error($conn);
        }
    }
?>