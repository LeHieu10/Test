<?php
    session_start();
    include './config/config.php';
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE username ='$username' AND password = '$password' ";
        $check = mysqli_query($con, $sql);
        // $old = mysqli_fetch_array($check);
        // if(mysqli_num_rows($check) > 0){
        //     $_SESSION["user"] = $username;
        //     // if($old['level'] == 1){
        //     //     header("location: ./index.php");
        //     // }
        //     // else {
        //     //     header("location: ./admin/index.php");
        //     // }
        //     header("localtion: ./admin/index.php");
        // }
        $old = mysqli_fetch_array($check);
        $_SESSION["user"] = $username;
        if($username == 'admin') header("location: ./admin/index.php");
        else header("location: ./index.php");
        // if($check &&  $old['level'] == 0){
        //      header("location: ./admin/index.php");
        // }
        // else header("location: ./index.php");
    }
    else{
        header("location: ./login.php");
    }
?>