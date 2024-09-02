<?php   
  include('db/connect.php');
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:41:04 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title> Mobistore Online Mobile Store Template - Cart Page </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
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
                    <p class="top-text">Giao hàng linh hoạt, giao hàng nhanh chóng</p>
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
                        <input type="text" class="form-control" placeholder="Tìm kiếm ở đây">
                        <button type="Submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <!-- /.search -->
                <!-- account -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="account-section">
                        <ul>
                            <li><a href="account.php" class="title hidden-xs">tài khoản</a></li>
                            <li class="hidden-xs">|</li>
                            <li><a href="login-form.php" class="title hidden-xs">đăng nhập</a></li>
                            <li><a href=""><i class="fa fa-heart"></i></a></li>
                            <li><a href="cart.php" class="title"><i class="fa fa-shopping-cart"></i> <sup
                                        class="cart-quantity">1</sup></a></li>

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
                                <li><a href="index.php">Trang chủ</a></li>
                                <li><a href="product-list.php">Điện thoại</a></li>
                                <li><a href="about.php">Thông tin</a></li>
                                <li><a href="blog-default.php">Bài viết</a></li>
                                <li><a href="contact-us.php">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.navigations-->
            </div>
        </div>
    </div>
    <!-- /. header-section-->
    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li>Sản phẩm yêu thích</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- cart-section -->
    <!-- <div class="space-medium"> -->
    <div class="container">
        <div class="row">

            <div class="box">
                <div class="box-head box-head-gray">
                    <h3 class="head-title">Danh sách yêu thích</h3>
                </div>
                <div class="box-body box-body-gray">
                    <ul class="list-favorites">
                        <li class="item">
                            <button class="btn-delete">×</button>
                            <div class="thumbnail">
                                <a href="product-single.php" class="img">
                                    <img src="https://media3.scdn.vn/img4/2021/09_16/GGLGduTGmON5lp2Xmii5_simg_de2fe0_500x500_maxb.jpg"
                                        alt="">
                                </a>
                            </div>

                            <div class="body">
                                <a href="product-single.php" class="name">Điện Thoại iPhone 13 Pro Max 256GB - Hàng
                                    Chính Hãng</a>
                                <div class="rating-review">
                                    <div class="rating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-o"></i></span>
                                    </div>
                                    <span class="review-count">(10 nhận xét)</span>
                                </div>

                            </div>

                            <div class="footer">
                                <div class="price-discount">36.990.00 đ</div>
                                <div class="wrap">
                                    <div class="price"><strike>37.990.000 đ</strike></div>
                                    <div class="discount">-3%</div>
                                </div>
                            </div>

                        </li>

                        <li class="item">
                            <button class="btn-delete">×</button>
                            <div class="thumbnail">
                                <a href="product-single.php" class="img">
                                    <img src="https://salt.tikicdn.com/cache/400x400/ts/product/81/73/6c/e3220a1f860b8611cfc0e7f78d515fbf.jpg.webp"
                                        alt="">
                                </a>
                            </div>

                            <div class="body">
                                <a href="product-single.php" class="name">Điện Thoại iPhone 13 Pro Max 256GB - Hàng
                                    Chính Hãng</a>
                                    <div class="rating-review">
                                        <div class="rating">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                        </div>
                                        <span class="review-count">(10 nhận xét)</span>
                                    </div>
    
                            </div>

                            <div class="footer">
                                <div class="price-discount">36.990.000 đ</div>
                                <div class="wrap">
                                    <div class="price"><strike>37.990.00 đ</strike></div>
                                    <div class="discount">-3%</div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" class="btn-link" style="display:block; margin-bottom: 20px">
                <center> Trở về trang mua hàng</center>
            </a>

            <!-- cart-total -->

        </div>
        <!-- /.cart-total -->
        <!-- </div> -->
    </div>
    <!-- /.cart-section -->
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
                            <li><a href="index.php">Trang chủ </a></li>
                            <li><a href="product-list.php">Điện thoại</a></li>
                            <li><a href="about.php">Thông tin</a></li>
                            <li><a href="blog-default.php">Bài viết</a></li>
                            <li><a href="contact-us.php">Liên hệ, hỗ trợ</a></li>
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
    <!-- /.footer -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/multiple-carousel.js"></script>

</body>

</html>