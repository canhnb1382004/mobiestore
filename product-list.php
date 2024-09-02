<?php   
  include('db/connect.php');
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:40:53 GMT -->

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
                            <li><a href="account.php" class="title hidden-xs">Tài khoản</a></li>
                            <li class="hidden-xs">|</li>
                            <li><a href="login-form.php" class="title hidden-xs">Đăng Nhập</a></li>
                            <li><a href="favorite-list.php"><i class="fa fa-heart"></i></a></li>
                            <li><a href="cart.php" class="title"><i class="fa fa-shopping-cart"></i> <sup
                                        class="cart-quantity">1</sup></a>
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
                                <li><a href="blog-default.php">Bài viết</a> </li>
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

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Trang chủ</a></li>
                            <li>Điện thoại</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. header-section-->
    <!-- product-list -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <!-- sidenav-section -->
                    <div id='cssmenu'>
                        <ul>
                            <li class='has-sub'><a href='#'>Hệ điều hành</a>
                                <ul>

                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Tất cả</span></label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Android</span></label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">ISO</span>
                                        </label>
                                    </li>

                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'>Hãng sản xuất</a>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Tất cả </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Samsung</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Apple</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Xiaomi</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Vsmart</span>
                                        </label>
                                        </span>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">OPPO</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Vivo</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Nokia</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Huawei</span>
                                        </label>
                                    </li>

                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'>Giá Bán</a>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Tất cả</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Dưới 2 triệu</span>
                                        </label>
                                    </li>
                                    <li><span>
                                            <label>
                                                <input type="checkbox">
                                                <span class="checkbox-list">Từ 2 - 5 triệu</span>
                                            </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Từ 5 - 10 triệu</span>
                                        </label>
                                    </li>

                                    <li><span>
                                            <label>
                                                <input type="checkbox">
                                                <span class="checkbox-list">Từ 10 - 15 triệu</span>
                                            </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Trên 15 triệu</span>
                                        </label>
                                    </li>

                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'>Màn hình</a>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Tất cả</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Dưới 5.0 inch</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Trên 6.0 inch</span>
                                        </label>
                                    </li>

                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'>Bộ nhớ trong</a>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Tất cả</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Dưới 32GB</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">64GB và 128GB</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">256GB và 512GB</span>
                                        </label>
                                    </li>

                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span class="checkbox-list">Trên 512GB</span>
                                        </label>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- /.sidenav-section -->
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb10 alignright">
                            <form>
                                <div class="select-option form-group">
                                    <select name="select" class="form-control" placeholder="Sắp xếp theo">
                                        <option value="" default>Sắp xếp theo</option>
                                        <option value="">Bán Chạy</option>
                                        <option value="">Giá Thấp</option>
                                        <option value="">Giá Cao</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php 
                         $sql_select_pro = mysqli_query($conn,'SELECT * FROM tbl_sanpham')
                        ?>
                        
                    <div class="row">
                        <!-- product -->
                        <?php 
                                while($row_pro = mysqli_fetch_array($sql_select_pro)){

                            ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb30">
                            <a href="product-single.php?id=<?php echo  $row_pro['sanpham_id']?>">
                                <div class="product-block">
                                    <div class="product-img"><img src="imagine_product/<?php echo  $row_pro['sanpham_imagine']?>" alt=""></div>
                                    <div class="product-content">
                                        <h5><a href="#" class="product-title"><?php echo  $row_pro['sanpham_name']?> <strong></strong></a></h5>
                                        <div class="product-meta"><a href="#" class="product-price"><?php echo  $row_pro['sanpham_gia']?></a>
                                            <a href="#" class="discounted-price"><?php echo  $row_pro['sanpham_giakhuyenmai']?></a>
                                            
                                        </div>
                                        <div class="shopping-btn">
                                            <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="product-btn btn-cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div> 
                            </a>
                        </div>
                        <?php      
                            }
                            ?>
                        <!-- /.product -->
                        
                    </div>
                    <div class="row">
                        <!-- pagination start -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="st-pagination">
                                <ul class="pagination">
                                    <li><a href="#" aria-label="previous"><i class="fa fa-angle-left" style="font-size: 16px;"></i></a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li> <a href="#" aria-label="Next"><i class="fa fa-angle-right" style="font-size: 16px;"></i></li>
                                </ul>
                            </div>
                        </div>
                        <!-- pagination close -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.product-list -->
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
                        <h3 class="footer-title">Truy cập nhanh</h3>
                        <ul class="arrow">
                            <li><a href="index.php">Trang chủ</a></li>
                            <li><a href="product-list.php">Điện thoại</a></li>
                            <li><a href="about.php">Thông tin</a></li>
                            <li><a href="blog-default.php">Bài viết</a></li>
                            <li><a href="contact-us.php">Liên hệ</a></li>
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <script type="text/javascript">
        (function ($) {
            $(document).ready(function () {
                $('#cssmenu ul ul li:odd').addClass('odd');
                $('#cssmenu ul ul li:even').addClass('even');
                $('#cssmenu > ul > li > a').click(function () {
                    $('#cssmenu li').removeClass('active');
                    $(this).closest('li').addClass('active');
                    var checkElement = $(this).next();
                    if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                        $(this).closest('li').removeClass('active');
                        checkElement.slideUp('normal');
                    }
                    if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                        $('#cssmenu ul ul:visible').slideUp('normal');
                        checkElement.slideDown('normal');
                    }
                    if ($(this).closest('li').find('ul').children().length == 0) {
                        return true;
                    } else {
                        return false;
                    }
                });
            });
        })(jQuery);
    </script>
</body>


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:40:53 GMT -->

</html>