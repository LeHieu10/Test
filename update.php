<?php  
    session_start();
    $user = $_SESSION['user'];
    include './config/config.php';
    $sql = "SELECT * FROM thongtin WHERE username = '$user'";
    $tt = mysqli_query($con, $sql);
    $old = mysqli_fetch_array($tt);
    if(isset($_POST['submit'])){
        $fullname = ($_POST['fullname'] == '') ? $old['fullname'] : $_POST['fullname'];
        $date = ($_POST['date'] == '') ? $old['date'] : $_POST['date'];
        $address = ($_POST['address'] == '') ? $old['address'] : $_POST['address'];
        $phone = ($_POST['phonenumber'] == '') ? $old['phonenumber'] : $_POST['phonenumber'];
        $sql = "UPDATE thongtin set fullname = '$fullname', date = '$date', address = '$address', phonenumber = '$phone' where username = '$user' ";
        mysqli_query($con, $sql);
        header("location: ./displaytt.php");
    }
?>