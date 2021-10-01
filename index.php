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
            <a href = "./index.php" class = "navber-branch">
                <img src="./access/css/imgs/band/logo2.svg" height = "50px" alt = "Branch">
            </a>
            <button class = "navbar-toggler" type = "button" data-toggle = "collapse"
                data-target = "#navbarResponsive">
                <span class = "navbar-toggler-icon"></span>
            </button>
            <div class = "collapse navbar-collapse" id = "navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="./index.php" class="nav-link">Home</a>
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
                            <li><a style="margin-left:20px; color:rgb(0,0,0,0.5); text-decoration:none" href="./displaytt.php">Thông tin</a></li>
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
    <!-- Slider -->
    <div id = "slides" class = "carousel slide" data-ride = "carousel">
        <ol class="carousel-indicators">
            <li data-target = "#slides" data-slider-to = "0" class="active"></li>
            <li data-target = "#slides" data-slider-to = "1"></li> 
            <li data-target = "#slides" data-slider-to = "2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="./access/css/imgs/slider/slider0.jpg">
            </div>
            <div class="carousel-item">
                <img src="./access/css/imgs/slider/slider2.jpg">
            </div>
            <div class="carousel-item">
                <img src="./access/css/imgs/slider/slider3.jpg">
            </div>
        </div>
        <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Jumbotron -->
    <div id = "GT" class="container-fluid padt-66">
        <div class="jumbotron">
            <div class = "col-12 text-center">
                <h2 class = "title">Giới Thiệu</h2>
                <p>
                    Trung tâm CSKH được thành lập theo Quyết định số 2015/ QĐ-EVN NPC ngày 30/6/2015 của Chủ tịch Tổng công ty Điện lực miền Bắc;
                    Trung tâm CSKH là đơn vị hạch toán phụ thuộc Tổng công ty, hoạt động dưới hình thức chi nhánh của Tổng công ty theo quy định của Luật Doanh nghiệp, các quy định pháp luật có liên quan;
                    Trung tâm CSKH được sử dụng con dấu riêng, được mở tài khoản tại Ngân hàng, Kho bạc Nhà nước, hoạt động theo phân cấp, ủy quyền của Tổng công ty. Trung tâm CSKH chịu trách nhiệm trước pháp luật và Tổng công ty theo nhiệm vụ và quyền hạn được giao.Để thực hiện chuyển đổi số, công tác truyền thông, tuyên truyền tới mọi CBNV-NLĐ trong Tập đoàn với mục tiêu mỗi người hiểu được bản thân mình, đơn vị mình cần phải làm gì trong kế hoạch tổng thể chuyển đổi số của Tập đoàn; lợi ích của chuyển đổi số; tầm quan trọng của công tác đảm bảo an ninh, an toàn thông tin.
                </p>
            </div>
            <div class = "col-xs-12 col-sm-12 col-md-3">
                <a href="#">
                    <button type="button" class = "btn btn-outline-secondary">Xem Thêm</button>
                </a>
            </div>
        </div>
    </div>
    <div id = "DV" class="container-fluid padt-66">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="dislay-4 title">Dịch vụ</h1>
                <hr>
                <p>Các dịch vụ chúng tôi cung cấp</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class = "col-xs-12 col-sm-6 col-md-3 ad-item">
                <img src="./access/css/imgs/advance/h1.png">
                <div>
                    <a href="#DV">
                        <button type="button" class = "btn btn-outline-secondary ad-btn">Đăng ký</button>
                    </a>
                </div>
            </div>
            <div class = "col-xs-12 col-sm-6 col-md-3 ad-item">
                <img src="./access/css/imgs/advance/h2.png">
                <div>
                    <a href="#DV">
                        <button type="button" class = "btn btn-outline-secondary ad-btn">Lịch cắt điện</button>
                    </a>
                </div>
            </div>
            <div class = "col-xs-12 col-sm-6 col-md-3 ad-item">
                <img src="./access/css/imgs/advance/h3.png">
                <div>
                    <a href="#DV">
                        <button type="button" class = "btn btn-outline-secondary ad-btn">Tra cứu hóa đơn</button>
                    </a>
                </div>
            </div>
            <div class = "col-xs-12 col-sm-6 col-md-3 ad-item">
                <img src="./access/css/imgs/advance/h5.png">
                <div>
                    <a href="#">
                        <button type="button" class = "btn btn-outline-secondary ad-btn">Thanh toán trực tuyến</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- New -->
    <div id = "NEW" class="container-fluid padt-66">
        <div class="col-md-12 title text-center">
            <h1>Tin mới</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <h2>100% cán bộ, nhân viên, người lao động EVN sẽ tham gia chuyển đổi số</h2>
                <p> Chủ tịch Hội đồng thành viên EVN Dương Quang Thành chỉ đạo, để triển khai hiệu quả chuyển đổi số và an toàn thông tin, phải bắt đầu từ chuyển đổi nhận thức; đổi mới tư duy của mỗi CBNV-NLĐ của EVN. Trong đó, cần giải quyết các cặp mâu thuẫn trong nhận thức như: mâu thuẫn giữa thực hiện tuần tự và đột phá; mâu thuẫn giữa nâng cấp cái cũ và phá bỏ xây dựng cái mới; mâu thuẫn giữa việc tự xây dựng theo nhu cầu và ứng dụng cái có sẵn; mâu thuẫn giữa đào tạo nguồn nhân lực và chính sách thu hút nguồn nhân lực;...
                </p>
            </div>
            <div class="col-lg-6">
                <img src="./access/css/imgs/news/new1.jpg" class = "img-fluid">
            </div>
        </div>
    </div>
    <!-- Form Contact-->
    <div id = "CT" class = "container-fluid padt-66">
        <div class = "col-md-12 title text-center">
            <h1>Gửi tin nhắn cho chúng tôi</h1>
            <p>Quý khách vui lòng để lại yêu cầu, điền đầy đủ thông tin bên dưới. Chúng tôi sẽ xử lý khi nhận được thông tin.</p>
        </div>
    <div>
    <div class="container text-form">
        <div class="row">
            <div class="col-sm-5">
                <p><i class = "ti-location-pin icon"></i>Thửa số 2, lô VP1, Quận Hoàng Mai, Hà Nội</p>
                <p><i class = "ti-mobile icon"></i>1900 6769</p>
                <p><i class = "ti-email icon"></i>cskh@nps.com.vn</p>
            </div>
            <div class="col-sm-7 slideanim">
                <div class="row">
                    <div class="col-sm 6 form-group">
                        <input class = "form-control" id = "name" name = "name" placeholder="Họ tên" type="text" required>
                    </div>
                    <div class="col-sm 6 form-group">
                        <input class = "form-control" id = "email" name = "email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class = "form-control" name="comments" id="comments" rows="5" placeholder="Nhận xét" required></textarea>
                <br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-primary" style="float: right;" type="submit" value="Gửi">Gửi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid footer-box">
        <div class="container footer-text">
            <div class="row">
                <div class="col-sm-5 footer-item">
                    <p>Trung tâm Chăm sóc khách hàng</p>
                    <p>Tổng Công ty Điện lực miền Bắc</p>
                    <p>Số giấy phép: 0100100417-048 cấp ngày 21/10/2015</p>
                    <img src="./access/css/imgs/dau.png" height="70" alt="">
                </div>
                <div class="col-sm-5 footer-item">
                    <p>Địa chỉ:  <span>Thửa số 2, lô VP1, Quận Hoàng Mai, TP Hà Nội.</span></p>
                    <p>Hotline:  <span>1900 6769</span></p>
                    <p>Email: <span class = "email-dec">cskh@npc.com.vn</span></p>
                </div>
                <div class="col-sm-2 footer-item media-item">
                    <p><i class = "ti-facebook"> <span style="margin-left: 10px;">Facebook</span></i></p>
                    <p><i class = "ti-youtube"><span style="margin-left: 15px;">Youtube</span></i></p>
                    <p><i class = "ti-twitter-alt"><span style="margin-left: 15px;">Tiwtter</span></i></p>
                </div>
            </div>
        </div>
        <div class="container-fluid footer-end">
            <div class="row text-center">
                <div class="col-sm-12">
                    <p>© 2021 EVNNPC CSKH. ALL RIGHTS RESERVED.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>