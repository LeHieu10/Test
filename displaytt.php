<?php
    session_start();
    include './config/config.php';
    $user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chăm sóc khách hàng</title>
    <!-- import boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./access/css/fonts-icon/themify-icons/themify-icons.css"> 
    <link rel="stylesheet" href="./access/css/style.css">
</head>
<body>
    <!--Navigation-->
    <nav class = "navbar navbar-expand-md navbar-light fixed-top">
        <div class = "container-fluid">
            <a href = "index.php" class = "navber-branch">
                <img src="./access/css/imgs/band/logo2.svg" height = "50px" alt = "Branch">
            </a>
            <button class = "navbar-toggler" type = "button" data-toggle = "collapse"
                data-target = "#navbarResponsive">
                <span class = "navbar-toggler-icon"></span>
            </button>
            <div class = "collapse navbar-collapse" id = "navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#GT" class="nav-link">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#DV" class="nav-link">Dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a href="#NEW" class="nav-link">Tin mới</a>
                    </li>
                    <li class="nav-item">
                        <a href="#CT" class="nav-link">Liên hệ</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <?php if(isset($_SESSION['user'])){ ?>
                        <a style = "color: rgb(0,0,0,0.5); cursor: pointer; text-decoration:none; margin-right: 90px; padding-left: 10px" class="dropdown-toggle ti-user" data-toggle="dropdown"><?php echo $user ?><b class="caret"></b></a>
                        <ul class="dropdown-menu" style="background-color:rgba(95, 245, 8, 0.7); margin-top:19px">
                            <!-- <li><a style="margin-left:20px; color:rgb(0,0,0,0.5); text-decoration:none" href="./login.php">Thông tin</a></li> -->
                            <li><a style="margin-left:20px; color:rgb(0,0,0,0.5); text-decoration:none" href="./logout.php">Đăng xuất</a></li>
                        </ul>
                        <?php } else {?>
                        <a style = "color: rgb(0,0,0,0.5); cursor: pointer; text-decoration:none; margin-right: 90px; padding-left: 10px" class="dropdown-toggle ti-user" data-toggle="dropdown"><?php echo $user ?><b class="caret"></b></a>
                        <ul class="dropdown-menu" style="background-color:rgba(95, 245, 8, 0.7); margin-top:19px">
                            <li><a style="margin-left:20px; color:rgb(0,0,0,0.5); text-decoration:none" href="./login.php">Đăng nhập</a></li>
                            <li><a style="margin-left:20px; color:rgb(0,0,0,0.5); text-decoration:none" href="./login.php">Đăng ký</a></li>
                            <!-- <li><a style="margin-left:20px; color:rgb(0,0,0,0.5); text-decoration:none" href="">Đăng xuất</a></li> -->
                        </ul>
                        <?php }?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div style = "margin-top: 80px; background-color: #ccc" class = "container" >
    <?php
        $sql = "SELECT * FROM thongtin WHERE username = '$user'";
        $tt = mysqli_query($con, $sql);
        $old = mysqli_fetch_array($tt);
    ?>
    <div class="row">
                    <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-12">
            <div class="white-box" style="margin-top:50px">
                <div class="user-bg"> 
                     <div class="overlay-box">
                         <div class="user-content">
                            <h4 class="text-white mt-2 text-center">User Name</h4>
                            <h5 class="text-white mt-2 text-center"><?php echo $old['username'] ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="update.php" method="post">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Full Name</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" name="fullname" placeholder="<?php echo $old['fullname'] ?>"
                                    class="form-control p-0 border-0"> 
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Date of birth</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" name="date" placeholder="<?php echo $old['date'] ?>"
                                    class="form-control p-0 border-0"> 
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Address</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" name="address" placeholder="<?php echo $old['address'] ?>"
                                    class="form-control p-0 border-0"> 
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Phone number</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" name="phonenumber" placeholder="<?php echo $old['phonenumber'] ?>"
                                    class="form-control p-0 border-0"> 
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                            <input type="submit" class="btn btn-primary" value="Update Profile" name="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                    <!-- Column -->
    </div>
    
</body> 
<style>
    .tt{
        padding-left: 300px
    }
</style>