<?php   
  include('db/connect.php');
  session_start();
?>

<?php   
  if(isset($_GET['xoa'])){
    $id = $_GET['id'];
    $sql_xoa = mysqli_query($conn,"DELETE  FROM tbl_order WHERE order_product_id ='$id'");
  }
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
    <!-- /. header-section-->
    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li>Giỏ hàng</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- cart-section -->
    <form action="" method = "POST" enctype="multipart/form-data">                       
        <div class="container">
            <div class="cart-content mt30 mb30">
                
                
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Đơn giá khuyến mãi</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <?php 
                         $a=0;
                        if(isset($_SESSION['user']['id'])){
                            $a = $_SESSION['user']['id'];
                        }
                        
                        $sql_order = mysqli_query($conn," SELECT * FROM tbl_order WHERE order_product_user= $a")
                    ?>
                    <tbody>
                        <?php 
                            
                            $sum1=0;
                            if(isset($_SESSION['user']['login'])){
                            while($row_order_details = mysqli_fetch_array($sql_order)){
                            

                                
                        ?>
                        
                        <tr>
                            <td>
                                <div class="item-center pdl10"><input type="checkbox" class="checkboxStyle"></div>
                            </td>
                            <td>
                                <div class="product-title item-center">
                                    <img name="product_img" src="imagine_product/<?php echo $row_order_details['order_product_img'] ?>" alt="">
                                    <div>
                                        <p name="product_name"><?php echo $row_order_details['order_product_name'] ?></p>
                                        
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div name="product_gia" class="item-center"><?php echo $row_order_details['order_product_gia'] ?></div>
                            </td>
                            <td>
                                <div name="product_khuyenmai" class="item-center"><?php echo $row_order_details['order_product_khuyenmai'] ?></div>
                            </td>
                            <td>
                                <div class="item-center" name="product_soluong">
                                    <div class="quantity">
                                        <?php echo $row_order_details['order_product_soluong']?>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="item-center text-red" name="thanhtien"><?php echo $row_order_details['order_product_thanhtien']?></div>
                            </td>
                            <td>
                                <a href='?xoa&&id=<?php echo $row_order_details['order_product_id']?>' ><div class="item-center pinside10">
                                    <i name='xoa' class="far fa-trash-alt"></i></div></a>
                                
                            </td>
                        </tr>
                        <?php 
                            if(isset($_POST['muahang'])){
                                $user_id=$_SESSION['user']['id'];
                                $product_img = $row_order_details['order_product_img'];
                                $product_name = $row_order_details['order_product_name'];
                                $product_gia = $row_order_details['order_product_gia'];
                                $product_khuyenmai = $row_order_details['order_product_khuyenmai'];
                                $product_thanhtien = $row_order_details['order_product_thanhtien'];
                                $product_soluong = $row_order_details['order_product_soluong'];
                                $product_insert_donhang = mysqli_query($conn,"INSERT INTO tbl_donhang(donhang_user,donhang_product_img,donhang_product_name,donhang_product_gia,donhang_khuyenmai,donhang_thanhtien,donhang_product_soluong) VALUES ('$user_id','$product_img','$product_name','$product_gia','$product_khuyenmai','$product_thanhtien','$product_soluong')");
                                //$product_delete_cart = mysqli_query($conn,"DELETE FROM tbl_order(donhang_user,donhang_product_img,donhang_product_name,donhang_product_gia,donhang_khuyenmai,donhang_thanhtien,donhang_product_soluong) VALUES ('$user_id','$product_img','$product_name','$product_gia','$product_khuyenmai','$product_thanhtien','$product_soluong')");
                             }
                             
                        }
                        }
                        ?>

                    </tbody>
                    
                    
                </table>
                <div class="prices-summary">
                    <div class="left-content">
                        <a href="product-list.php" class="derection-product text-blue"><i class="fas fa-long-arrow-alt-left"></i> Tiếp tục
                            mua hàng</a>
                    </div>
                    <div class="right-con">
                        <div class="total-receipt">
                            <!-- <div class="promotion-code pinside20">
                                <input type="text" class="input-code" placeholder="Nhập mã ưu đãi">
                                <button type="submit" class="submit-code btn-default">Áp dụng</button>
                            </div>
                            <ul class="prices pinside20">
                                <li class="prices-item">
                                    <span class="prices-text">Tạm tính</span>
                                    <span class="prices-value">47.750.000đ</span>
                                </li>
                                <li class="prices-item">
                                    <span class="prices-text">Giảm giá</span>
                                    <span class="prices-value">0đ</span>
                                </li> -->
                            </ul>
                            <div class="prices-total pinside20">
                                <span class="price-text">Tổng cộng</span
                                <span class="prices-value prices-final text-red" name="tongcong"><?php 
                            $sum2 = 0;
                            $sum= mysqli_query($conn,"SELECT SUM(order_product_thanhtien) AS order_product_user FROM tbl_order WHERE order_product_user= $a");
                            $sum1 = mysqli_fetch_assoc($sum);
                            if(isset($sum1)){
                                echo $sum2 = $sum1['order_product_user'].".000.000VND";
                            }else{
                                echo $sum2 ;
                            }  ?></span>
                            </div>
                            
                        </div>
                        <?php 
                        if(isset($_POST['muahang'])){
                            $user_id=$_SESSION['user']['id'];
                            $tongcong=$sum2;
                            $product_insert_donhang = mysqli_query($conn,"INSERT INTO tbl_admin_donhang(admin_makhachhang,admin_tonggiatri) VALUES ('$user_id','$tongcong')");
                        }
                    ?>
                        <a><button name="muahang" class="btn btn-success" type="submit">Đặt Hàng</button></a>
                        <!-- <a href="checkout.php"  name = "muahang"class="btn-default btn-checkout">Mua Hàng</a> -->
                    </div>
                </div>
            </div>
            
        </div>
    </form>     
    <!-- /.cart-total -->
    <?php   
        
    ?>
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

    <script>
        function dcQuantity() {
            var result = document.getElementById('quantity-input');
            var qty = result.value;
            if (!isNaN(qty) && qty > 1) {
                result.value--;
                document.getElementById('quantity-input').innerHTML = qty;
            }
            return false;
        };
        function icQuantity() {
            var result = document.getElementById('quantity-input');
            var qty = result.value;
            if (!isNaN(qty) && qty < 10) {
                result.value++;
                document.getElementById('quantity-input').innerHTML = qty;
            }
            return false;
        }
    </script>

</body>

</html>