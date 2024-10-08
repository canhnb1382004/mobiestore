<?php   
  include('db/connect.php');
  session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/login-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:41:05 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Nhom 21 LT WEB</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="fonts/fontawesome-free-5.15.4-web/css/all.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- top-header-->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-6 hidden-xs">
                    <p class="top-text">Flexible Delivery, Fast Delivery.</p>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <ul>
                        <li>+084 123 4567</li>
                        <li>nhom21@laptrinhweb.com</li>
                    </ul>
                </div>
            </div>
            <!-- /.top-header-->
        </div>
    </div>
    <!-- header-section-->
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8">
                    <div class="logo">
                        <a href="index.php"><img src="images/logo.png" alt=""> </a>
                    </div>
                </div>
                <!-- /.logo -->
                <!-- search -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="search-bg">
                        <input type="text" class="form-control" placeholder="Search Here">
                        <button type="Submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <!-- /.search -->
                <!-- account -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="account-section">
                    <ul>
                        <li><a href="account.php" class="title hidden-xs"><?php
                            if(isset($_SESSION['user']['login'])){
                                echo $_SESSION['user']['login'];
                            }else{
                                echo('Tài khoản');
                            }
                        ?></a></li>
                        <li class="hidden-xs">|</li>
                        <li><?php
                            if(isset($_SESSION['user']['login'])){
                            ?>
                            <a href="log-out.php" class="title hidden-xs">Đăng Xuất</a>
                            <?php
                            }else{
                            ?>    
                            <a href="login-form.php" class="title hidden-xs">Đăng Nhập</a>
                            <?php
                            }
                        ?></li>
                        
                        <li><a href="cart.php" class="title"><i class="fa fa-shopping-cart"></i>   <sup class="cart-quantity">1</sup></a>
                        </li>
                    </ul>
                </div>
                <!-- /.account -->
                </div>
                <!-- search -->
            </div>
        </div>
        <!-- navigation -->
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- navigations-->
                        <div id="navigation">
                            <ul>
                                <li class="active"><a href="index.php">Trang chủ</a></li>
                                <li><a href="product-list.php">Điện thoại</a>
                                </li>
                                
                                <li><a href="about.php">Thông tin</a>
                                </li>

                                <li><a href="contact-us.php">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.navigations-->
                </div>
            </div>
        </div>
    </div>
    <!-- /. header-section-->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li>Thông tin tài khoản</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- login-form -->
    <?php
        $a = 0;
        if(isset($_SESSION['user']['id'])) {
            $a = $_SESSION['user']['id'];
        }
        $sql_user_product = mysqli_query($conn,"SELECT* FROM tbl_khachhang WHERE khachhang_id = $a");
        foreach($sql_user_product as $row_user_product){
    ?>                        
    <div class="content">
        <div class="container">
            <div class="box">
                <div class="row-account">
                    <div class="left-container">
                        <div class="user-infor">
                            <img src="images/user-img.png" alt="">
                            <span><?php echo $_SESSION['user']['login']?></span>
                        </div>
                        <div class="side-bar-content">
                            <ul>
                                <a href="account.php">
                                    <li class="slide-bar "><i class="fa fa-edit"></i><span>Thông tin tài khoản</span>
                                    </li>
                                </a>
                                <a href="profile-receipt.php">
                                    <li class="slide-bar active"><i class="fas fa-money-check"></i><span>Quản lý đơn
                                            hàng</span></li>
                                </a>
                                <!-- <a href="address-deliver.html"><li class="slide-bar"><i class="fas fa-map-marker-alt"></i><span> Địa chỉ nhận hàng</span></li></a> -->
                                <a href="profile-reset-password.php">
                                    <li class="slide-bar"><i class="fas fa-lock"></i><span> Đổi mật khẩu</span></li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="right-container">
                        <h3 class="title-content">Đơn hàng đã đặt/ Chi tiết đơn hàng</h3>
                        <div class="receipt-infor-details">
                            <div class="title-receipt">
                                <div class="left-content content">
                                    <h4>ĐƠN HÀNG</h4>
                                    <p class="receipt-id">Mã đơn hàng: DH01</p>
                                    
                                </div>
                                <p></p>
                                <div class="right-content content">
                                    <h4>THÔNG TIN NHẬN HÀNG</h4>
                                    <p><strong><?php echo $_SESSION['user']['login']?></strong> - <?php echo $row_user_product['khachhang_number'] ?></p>
                                    <p class="address"><?php echo $row_user_product['khachhang_diachi'] ?></p>
                                </div>
                            </div>
                            <?php 
                                }   
                            ?>
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th scope="col">Đơn giá</th>
                                        <th scope="col">Giá Khuyến Mãi</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Thành tiền</th>
                                    </tr>
                                </thead>
                                <?php
                                    $a = 0;
                                    if(isset($_SESSION['user']['id'])) {
                                        $a = $_SESSION['user']['id'];
                                    }
                                    $sql_user_product1 = mysqli_query($conn,"SELECT* FROM tbl_donhang WHERE donhang_user = $a");
                                    foreach($sql_user_product1 as $row_user_product1){
                                ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="product-title">
                                                <img src="imagine_product/<?php echo $row_user_product1['donhang_product_img'] ?>" alt="">
                                                <div>
                                                    <p><?php echo $row_user_product1['donhang_product_name'] ?></p>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td><div class="item-center"><?php echo $row_user_product1['donhang_product_gia'] ?></div></td>
                                        <td><div class="item-center"><?php echo $row_user_product1['donhang_khuyenmai'] ?></div></td>
                                        <td><div class="item-center"><?php echo $row_user_product1['donhang_product_soluong'] ?></div></td>
                                        <td><div class="item-center"><?php echo $row_user_product1['donhang_thanhtien'] ?></div></td>
                                    </tr>

                                    

                                </tbody>
                                <?php 
                                    }
                                ?>
                                <tfoot>
                                    <tr>
                                        <td scope="row"></td>
                                        <td></td>
                                        <td scope="row">
                                            <div>
                                                
                                                
                                                <p>Tổng thanh toán:</p>
                                            </div>
                                        </td>
                                        <?php
                                            $a = 0;
                                            if(isset($_SESSION['user']['id'])) {
                                                $a = $_SESSION['user']['id'];
                                            }
                                            $sql_user_product2 = mysqli_query($conn,"SELECT* FROM tbl_admin_donhang WHERE admin_makhachhang = $a");
                                            foreach($sql_user_product2 as $row_user_product2){
                                        ?>
                                        <td>
                                            <div>
                                                <p><?php echo $row_user_product2['admin_tonggiatri'] ?></p>
                                                
                                            </div>
                                        </td>
                                        <?php 
                                            }
                                        ?>
                                    </tr>

                                </tfoot>
                            </table>
                            <a href="profile-receipt.php" class="redirect-to-receipt text-blue"><i class="fas fa-long-arrow-alt-left"></i> Danh sách đơn hàng</a>
                        </div>
                    </div>
                    <!-- /.features -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.login-form -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- footer-company-links -->
                <!-- footer-contact links -->
                <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="footer-widget">
                        <h3 class="footer-title">Thông tin hỗ trợ</h3>
                        <div class="contact-info">
                            <span class="contact-icon"><i class="fa fa-map-marker"></i></span>
                            <span class="contact-text">Phường Linh Trung, Thủ Đức<br>Thành phố Hồ Chí Minh, Việt Nam -
                                1955</span>
                        </div>
                        <div class="contact-info">
                            <span class="contact-icon"><i class="fa fa-phone"></i></span>
                            <span class="contact-text">+084-123-4567 / 89</span>
                        </div>
                        <div class="contact-info">
                            <span class="contact-icon"><i class="fa fa-envelope"></i></span>
                            <span class="contact-text">nhom21@ltweb.com</span>
                        </div>
                    </div>
                </div>
                <!-- /.footer-useful-links -->
                <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="footer-widget">
                        <h3 class="footer-title">Tiện ích</h3>
                        <ul class="arrow">
                            <li><a href="index.php">Home </a></li>
                            <li><a href="product-list.php">Mobie</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="blog-default.php">Blog</a></li>
                            <li><a href="contact-us.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-useful-links -->
                <!-- footer-policy-list-links -->
                <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="footer-widget">
                        <h3 class="footer-title">Chính sách</h3>
                        <ul class="arrow">
                            <li><a href="#">Thanh toán</a></li>
                            <li><a href="#">Hủy, trả hàng</a></li>
                            <li><a href="#">Giao hàng và vận chuyển</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-policy-list-links -->
                <!-- footer-social links -->
                <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="footer-widget">
                        <h3 class="footer-title">Liên lạc với chúng tôi</h3>
                        <div class="ft-social">
                            <span><a href="#" class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a></span>
                            <span><a href="#" class="btn-social btn-twitter"><i class="fa fa-twitter"></i></a></span>
                            <span><a href="#" class="btn-social btn-googleplus"><i
                                        class="fa fa-google-plus"></i></a></span>
                            <span><a href="#" class=" btn-social btn-linkedin"><i class="fa fa-linkedin"></i></a></span>
                            <span><a href="#" class=" btn-social btn-pinterest"><i
                                        class="fa fa-pinterest-p"></i></a></span>
                            <span><a href="#" class=" btn-social btn-instagram"><i
                                        class="fa fa-instagram"></i></a></span>
                        </div>
                    </div>
                </div>
                <!-- /.footer-social links -->
            </div>
        </div>
        <!-- tiny-footer -->
        <div class="tiny-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="payment-method alignleft">
                            <ul>
                                <li><a href="#"><i class="fa fa-cc-paypal fa-2x"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-mastercard  fa-2x"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-visa fa-2x"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-discover fa-2x"></i></a></li>
                            </ul>
                        </div>
                        <p class="alignright">Copyright © All Rights Reserved 2020 Template Design by
                            <a href="https://easetemplate.com/" target="_blank" class="copyrightlink">Nhom 21</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- /. tiny-footer -->
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
</body>


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/login-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:41:06 GMT -->

</html>