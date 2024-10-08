<?php   
  include('db/connect.php');
  session_start();

?>





<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:40:15 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="create ecommerce website template for your online store, responsive mobile templates">
    <meta name="keywords" content="ecommerce website templates, online store,">
    <title>Nhom 21 LT WEB</title>
    <!-- Bootstrapppppp -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- owl-carousel -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
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
<!-- slider -->
<div class="slider">
    <div class="owl-carousel owl-one owl-theme">
        <div class="item">
            <div class="slider-img">
                <img src="images/slider_1.jpg" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-6 col-xs-12">
                        <div class="slider-captions">
                            <div class="brand-img">
                                <img src="images/mi_logo.png" alt="">
                            </div>
                            <h1 class="slider-title">Red Mi <span>Y1</span></h1>
                            <p class="hidden-xs">LED Selfie-light | Fingerprint sensor | Dedicated microSD card slot Snapdragon 435 octa-core processor </p>
                            <p class="slider-price">$138.99 </p>
                            <a href="cart.php" class="btn btn-primary btn-lg hidden-xs">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-img"><img src="images/slider_2.jpg" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-6 col-xs-12">
                        <div class="slider-captions">
                            <div class="brand-img">
                                <img src="images/google_logo.png" alt="">
                            </div>
                            <h1 class="slider-title">Google Pixel 2</h1>
                            <p class="hidden-xs">The latest Qualcomm Snapdragon 835 processor | Water-resistant metal unibody | Up to 7 hours of battery.</p>
                            <p class="slider-price">$ 938.10</p>
                            <a href="cart.php" class="btn btn-primary btn-lg hidden-xs">Buy Now</a>                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-img"><img src="images/slider_3.jpg" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-6 col-xs-12">
                        <div class="slider-captions">
                            <div class="brand-img">
                                <img src="images/apple_logo.png" alt="">
                            </div>
                            <h1 class="slider-title">iphone 8 plus  </h1>
                            <p class="hidden-xs">5.5 inch Retina HD Display | 12MP wide-angle cameras
                                <br> | 64 GB &amp; 256 GB ROM Memory</p>
                            <p class="slider-price">$759.64</p>
                            <a href="cart.php" class="btn btn-primary btn-lg hidden-xs">Buy Now</a>                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.slider -->
<br>
<br>
<!-- latest products -->
<div class="container">
    <div class="row">
        <?php 
            $sql_select_pro1= mysqli_query($conn,"SELECT * FROM tbl_sanpham WHERE sanpham_active='Sản Phẩm Mới'")
        ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-head">
                    <h3 class="head-title">Sản Phẩm Mới</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <?php 
                                while($row_pro1= mysqli_fetch_array($sql_select_pro1)){
                        ?>
                        <!-- product -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="product-single.php?id=<?php echo $row_pro1['sanpham_id']?>"><div class="product-block">
                                <div class="product-img"><img src="imagine_product/<?php echo $row_pro1['sanpham_imagine']?>" alt=""></div>
                                <div class="product-content">
                                    <h5><a href="product-single.php?id=<?php echo $row_pro1['sanpham_id']?>" class="product-title"><?php echo $row_pro1['sanpham_name']?></a></h5>
                                    <div class="product-meta"><a href="#" echo class="product-price"><?php echo $row_pro1['sanpham_gia']?></a>
                                        <a href="product-single.php?id=<?php echo $row_pro1['sanpham_id']?>" class="discounted-price"><strike><?php echo $row_pro1['sanpham_giakhuyenmai']?></strike></a>
                                        
                                    </div>
                                    <div class="shopping-btn">
                                        
                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <!-- /.product -->
                            <?php 
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.latest products -->
<!-- seller products -->
<div class="container">
    <div class="row">
        <?php 
            $sql_select_pro2= mysqli_query($conn,"SELECT * FROM tbl_sanpham WHERE sanpham_active='Sản Phẩm Khuyến Mãi'")
        ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-head">
                    <h3 class="head-title">Sản Phẩm Khuyến Mãi</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <?php 
                                while($row_pro2= mysqli_fetch_array($sql_select_pro2)){
                        ?>
                        <!-- product -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="product-single.php?id=<?php echo $row_pro2['sanpham_id']?>"><div class="product-block">
                                <div class="product-img"><img src="imagine_product/<?php echo $row_pro2['sanpham_imagine']?>" alt=""></div>
                                <div class="product-content">
                                    <h5><a href="product-single.php?id=<?php echo $row_pro2['sanpham_id']?>" class="product-title"><?php echo $row_pro2['sanpham_name']?></a></h5>
                                    <div class="product-meta"><a href="#" echo class="product-price"><?php echo $row_pro2['sanpham_gia']?></a>
                                        <a href="product-single.php?id=<?php echo $row_pro2['sanpham_id']?>" class="discounted-price"><strike><?php echo $row_pro2['sanpham_giakhuyenmai']?></strike></a>
                                        
                                    </div>
                                    <div class="shopping-btn">
                                        
                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <!-- /.product -->
                            <?php 
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.seller products -->
<!-- featured products -->
<div class="container">
    <div class="row">
        <?php 
            $sql_select_pro3= mysqli_query($conn,"SELECT * FROM tbl_sanpham WHERE sanpham_active='Sản Phẩm Bán Chạy'")
        ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-head">
                    <h3 class="head-title">Sản Phẩm Bán Chạy</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <?php 
                                while($row_pro3= mysqli_fetch_array($sql_select_pro3)){
                        ?>
                        <!-- product -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="product-single.php?id=<?php echo $row_pro3['sanpham_id']?>"><div class="product-block">
                                <div class="product-img"><img src="imagine_product/<?php echo $row_pro3['sanpham_imagine']?>" alt=""></div>
                                <div class="product-content">
                                    <h5><a href="product-single.php?id=<?php echo $row_pro3['sanpham_id']?>" class="product-title"><?php echo $row_pro3['sanpham_name']?></a></h5>
                                    <div class="product-meta"><a href="#" echo class="product-price"><?php echo $row_pro3['sanpham_gia']?></a>
                                        <a href="product-single.php?id=<?php echo $row_pro3['sanpham_id']?>" class="discounted-price"><strike><?php echo $row_pro3['sanpham_giakhuyenmai']?></strike></a>
                                        
                                    </div>
                                    <div class="shopping-btn">
                                        
                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <!-- /.product -->
                            <?php 
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.featured products -->
<!-- cta -->
<!-- /.cta -->
<!-- features -->
<div class="bg-default pdt40 pdb40">
    <div class="container">
        <div class="row">
            <!-- features -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="feature-left">
                    <div class="feature-outline-icon">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="text-white">Thanh toán an toàn</h3>
                        <p>Mang đến dịch vụ trải nghiệm thoải mái nhất, an toàn, tiện dụng, Mobistore! </p>
                    </div>
                </div>
            </div>
            <!-- features -->
            <!-- features -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="feature-left">
                    <div class="feature-outline-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="text-white">Phản hồi 24/7</h3>
                        <p>Trợ giúp liên lạc, tham khảo , tra cứu 24/7!</p>
                    </div>
                </div>
            </div>
            <!-- features -->
            <!-- features -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="feature-left feature-circle">
                    <div class="feature-outline-icon">
                        <i class="fa fa-rotate-left "></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="text-white">Đổi trả miễn phí</h3>
                        <p>Miễn phí bảo hành đổi trả lên đến 365 ngày!</p>
                    </div>
                </div>
            </div>
            <!-- features -->
            <!-- features -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="feature-left">
                    <div class="feature-outline-icon">
                        <i class="fa fa-dollar"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="text-white">Giá tốt nhất</h3>
                        <p>Giá thành tốt nhất trong thị trường. Cập nhật sản phẩm 24/7!</p>
                    </div>
                </div>
            </div>
            <!-- features -->
        </div>
    </div>
</div>
<!-- /.features -->
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
                        <span class="contact-text">Phường Linh Trung, Thủ Đức<br>Thành phố Hồ Chí Minh, Việt Nam - 1955</span>
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
                        <span><a href="#" class="btn-social btn-facebook" ><i class="fa fa-facebook"></i></a></span>
                        <span><a href="#" class="btn-social btn-twitter"><i class="fa fa-twitter"></i></a></span>
                        <span><a href="#" class="btn-social btn-googleplus"><i class="fa fa-google-plus"></i></a></span>
                        <span><a href="#" class=" btn-social btn-linkedin"><i class="fa fa-linkedin"></i></a></span>
                        <span><a href="#" class=" btn-social btn-pinterest"><i class="fa fa-pinterest-p"></i></a></span>
                        <span><a href="#" class=" btn-social btn-instagram"><i class="fa fa-instagram"></i></a></span>
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
                        <a href="https://easetemplate.com/" target="_blank" class="copyrightlink">Nhom 21</a></p>
                </div>
            </div>
        </div>
        <!-- /. tiny-footer -->
    </div>
</div>
<!-- /.footer -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/menumaker.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/sticky-header.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/multiple-carousel.js"></script>
</body>


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:40:40 GMT -->
</html>
