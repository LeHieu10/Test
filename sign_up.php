<?php
    session_start();
    include './config/config.php';
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $email = $_POST['email'];
        $level = 1;
        $username = str_replace('\'', '\\\'', $username);
        $password = str_replace('\'', '\\\'', $password);
        $repassword = str_replace('\'', '\\\'', $repassword);
        $email = str_replace('\'', '\\\'', $email);
        if($password != $repassword){
            $_SESSION["thongbao"] = "Sai thong tin";
            header("location: ./login.php");
        }
        else{
            $sql = "SELECT * FROM users WHERE username ='$username' ";
            $check = mysqli_query($con, $sql);
            if(mysqli_num_rows($check) > 0){
                $_SESSION["thongbao"] = "Username da ton tai";
                header("location: ./login.php");
            }
            else{
                $password = md5($password);
                $sql = "INSERT INTO users (username, password, email, level) VALUES ('$username', '$password', '$email', '$level') ";
                mysqli_query($con, $sql);
                $sql = "INSERT INTO thongtin (username, fullname, date, address, phonenumber) VALUES ('$username', '', '', '', '') ";
                mysqli_query($con, $sql);
                $_SESSION["thongbao"] = "dang ky thanh cong";
                header('location: login.php');
            }
        }
    }
    else{
        echo 'chua an submit';
    }
?>
