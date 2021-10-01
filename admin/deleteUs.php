<?php
    include '../config/config.php';
    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = "SELECT * FROM users WHERE userID = '$id' ";
        $check = mysqli_query($con, $sql);
        $old = mysqli_fetch_array($check);
        $username = $old['username'];
        $sql = "DELETE FROM users WHERE userID = '$id' ";
        mysqli_query($con, $sql);
        $sql = "DELETE FROM thongtin WHERE username = '$username' ";
        mysqli_query($con, $sql);
        echo "Xóa thành công";
    }
?>