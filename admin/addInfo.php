<?php
    include '../config/config.php';
    session_start();
    if( !isset($_SESSION['user'])){
        header("location: ../login.php");
        die();
    }
    else{
        $user = $_SESSION['user'];
    }
    if(!empty($_POST)){
        $username =  $_POST['username'];
        $fullname =  $_POST['fullname'];
        $date = $_POST['date'];
        $address = $_POST['address'];
        $phone = $_POST['phonenumber'];
        $sql = "UPDATE thongtin SET fullname = '$fullname', date = '$date', address = '$address', phonenumber = '$phone' where username = '$username' ";
        mysqli_query($con, $sql);
        header("location: ./thongtin.php");
    }
    if(isset($_GET['user'])) {
        $username = $_GET['user'];
        $sql = "SELECT * FROM thongtin WHERE username = '$username'";
        $check = mysqli_query($con, $sql);
        $old = mysqli_fetch_array($check);
        $username = $old['username'];
        $fullname = $old['fullname'];
        $date = $old['date'];
        $address = $old['address'];
        $phone = $old['phonenumber'];
    }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Trang quản lý</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <a href="" style = "color: white; margin-left:30px">Xin chào <?php echo $user?></a>
                   
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <li>
                            <a class="profile-pic" href="../logout.php">
                                <img src="plugins/images/users/varun.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium"><?php echo $user ?></span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="profile.html"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu" >Tài khoản</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.html"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Thông tin khách hàng</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="fontawesome.html"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">Thống kê</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h2 class="page-title" style="padding-top:20px" >Quản lý khách hàng</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="background-color: #ccc; margin-top:20px">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h2 style="padding: 20px 0">Thông tin khách hàng</h2>
                    </div>
                </div>  
                <div class="panel-body">
                <div class="row">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material"  method="post">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">FullName</label>
                            <input type="text" name="username" value="<?php echo $username?>" style="display:none">
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" name="fullname" value="<?php echo $fullname?>" 
                                    class="form-control p-0 border-0"> 
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Date of birth</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" name="date" value="<?php echo $date?>" 
                                    class="form-control p-0 border-0"> 
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Address</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" name="address" value="<?php echo $address?>" 
                                    class="form-control p-0 border-0"> 
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Phone Number</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" name="phonenumber" value="<?php echo $phone?>" 
                                    class="form-control p-0 border-0"> 
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                            <input type="submit" class="btn btn-primary" value="Cập nhật" name="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
                </div>
            </div>
        </div>
    </div>
</body>