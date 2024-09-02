<?php   
  include('db/connect.php');
?>

<?php   
  if(isset($_GET['id'])){
    $get_id_product_single = $_GET['id'];
    
  }
?>
<?php   
  if(isset($_POST['muangay'])){
   header('Location:cart.php');
    
  }
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:40:53 GMT -->

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
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.desoslide.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery.rateyo.min.css">
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
    <!-- /. header-section-->
    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li>Chi tiết sản phẩm</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- product-single -->
    <?php 
    $sql_select_product_single = mysqli_query($conn,"SELECT * FROM tbl_sanpham WHERE sanpham_id='$get_id_product_single'");
    ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <?php 
                while ($row_select_product_single = mysqli_fetch_array($sql_select_product_single)){

                
                ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box">
                        <form action="" method="POST" enctype="multipart/form-data">
                        <!-- product-description -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <ul id="demo1_thumbs" class="slideshow_thumbs">
                                    <li>
                                            <a
                                                name='name="product_anh_select"'href="imagine_product/<?php echo $row_select_product_single['sanpham_imagine'] ?>">
                                                <div class=" thumb-img"><img
                                                        src="imagine_product/<?php echo $row_select_product_single['sanpham_imagine'] ?>"
                                                        alt=""></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                name='name="product_anh_select"'href="imagine_product/<?php echo $row_select_product_single['sanpham_imagine'] ?>">
                                                <div class=" thumb-img"><img
                                                        src="imagine_product/<?php echo $row_select_product_single['sanpham_imagine'] ?>"
                                                        alt=""></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                name='name="product_anh_select"'href="imagine_product/<?php echo $row_select_product_single['sanpham_imagine'] ?>">
                                                <div class=" thumb-img"><img
                                                        src="imagine_product/<?php echo $row_select_product_single['sanpham_imagine'] ?>"
                                                        alt=""></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div id="slideshow"></div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-single" >
                                        <div name="product_name_select"><h2><?php echo $row_select_product_single['sanpham_name'] ?></h2></div>
                                        
                                        <p class="product-price" style="font-size: 25px;" name="product_gia_select"><?php echo $row_select_product_single['sanpham_gia'] ?><strike
                                                style="color:rgba(128, 128, 128, 0.658); font-size: 18px;">
                                                <?php echo $row_select_product_single['sanpham_giakhuyenmai'] ?></strike>
                                        </p>
                                        
                                        <div class="product-quantity">
                                            <h4>Số lượng</h4>
                                            <div class="quantity mb20">
                                                <input class="btn-quantity decrease-quantity" onclick="dcQuantity()"
                                                    type="button" value="-">
                                                <input type="number" max="10" min="1" name="quantity" value="1"
                                                    class="quantity-input" id="quantity-input">
                                                <input class="btn-quantity increase-quantity" onclick="icQuantity()"
                                                    type="button" value="+">
                                            </div>
                                            <span class="rest-quantity">5 sản phẩm có sẵn</span>
                                        </div>
                                        <div>
                                            <a href="cart.php"><button href="cart.php" type='submit' name='muangay' class="btn btn-default btn-buy-now">
                                                Mua Ngay
                                            </button></a>
                                            
                                            <a href="cart.php?id=<?php echo $row_select_product_single['sanpham_id'] ?>" ><button  name='giohang' type="submit" class="btn btn-default">
                                                <i class="fa fa-shopping-cart"></i>&nbsp;Thêm vào giỏ hàng
                                            </button></a>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php   
                if(isset($_POST['giohang'])){
                    $product_name_select = $row_select_product_single['sanpham_name'];
                    $product_gia_select = $row_select_product_single['sanpham_gia'];
                    $product_anh_select = $row_select_product_single['sanpham_imagine'];
                    $sql_insert_product_select = mysqli_query($conn,"INSERT INTO tbl_cart(cart_product_name,cart_product_imagine,cart_product_gia ) VALUES ('$product_name_select','$product_anh_select','$product_gia_select') ");
                }
                  
                if(isset($_POST['muangay'])){
                    $product_name_select = $row_select_product_single['sanpham_name'];
                    $product_gia_select = $row_select_product_single['sanpham_gia'];
                    $product_anh_select = $row_select_product_single['sanpham_imagine'];
                    $sql_insert_product_select = mysqli_query($conn,"INSERT INTO tbl_cart(cart_product_name,cart_product_imagine,cart_product_gia ) VALUES ('$product_name_select','$product_anh_select','$product_gia_select') ");
                    
                    
            }
            ?> 
            

            <?php 
                }
            ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box-head scroll-nav">
                        <div class="head-title">
                            <a class="page-scroll active" href="#product">Mô tả sản phẩm</a>
                            <a class="page-scroll" href="#rating">Đánh giá và nhận xét</a>
                            <a class="page-scroll" href="#review">Thêm nhận xét</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- highlights -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="description-details">
                        <div class="description-left">
                            <h2 class="dgctpro">Đặc điểm nổi bật</h2>
                            <div itemprop="description" class="content_hide content-desc" style="height: 1180px;">
                                <h2><a href="https://www.xtmobile.vn/iphone-13-128gb" target="_blank"><span
                                            style="color: rgb(0, 0, 205);">iPhone 13 128GB</span></a>&nbsp;gây
                                    ấn tượng với thiết kế sang trọng, cấu hình mạnh mẽ với chip A15
                                    Bionic, dung lượng lớn, camera độc đáo. Đây là một trong những lý do
                                    khiến người dùng không nên bỏ qua&nbsp;<a
                                        href="https://www.xtmobile.vn/iphone-13" target="_blank"><span
                                            style="color: rgb(0, 0, 205);">iPhone 13</span></a>&nbsp;series
                                    trong năm nay.</h2>

                                <h3>Thiết kế cao cấp, sang trọng</h3>

                                <p>Đánh giá iPhone 13 128GB cho thấy ngoại hình máy không có nhiều khác
                                    biệt so với iPhone 12. Apple tiếp tục sử dụng cạnh viền vát phẳng mang
                                    đến sự nam tính và mạnh mẽ. Phần thân máy siêu mỏng, kết hợp với
                                    mặt kính cường lực bóng bẩy và khung nhôm chắc chắn mang đến độ bền
                                    tốt hơn.</p>

                                <p style="text-align: center;"><img alt="thiet-ke-iphone-13-128gb-xtmobile"
                                        src="https://www.xtmobile.vn/vnt_upload/product/10_2021/thiet-ke-iphone-13-128gb-xtmobile.jpg"
                                        style="width: 680px; height: 510px;"></p>

                                <p>Để trang bị viên pin lớn hơn cho dòng iPhone 13, "Táo khuyết" sẽ tăng độ
                                    dày của máy lên thêm khoảng 0,26mm. Mặt trước máy vẫn sử dụng notch
                                    tai thỏ đặt trưng, tuy nhiên kích thước có phần nhỏ gọn hơn thế hệ
                                    trước. Trong khi đó, mặt sau được thay đổi cách sắp xếp camera giúp
                                    người dùng dễ dàng phân biệt giữa iPhone 13 và iPhone 12.</p>

                                <p>Nếu như iPhone 12 sở hữu mô-đun camera hình vuông với ống kính xếp dọc
                                    thì trên iPhone 13 128GB giá rẻ được sắp xếp theo đường chéo. Bên cạnh
                                    đó, cụm camera cũng có phần to và lồi hơn. Thế hệ iPhone 2021 ra mắt
                                    năm này được Apple bổ sung khá nhiều màu sắc mới mẻ, giúp người dùng
                                    có nhiều lựa chọn hơn.</p>

                                <h3>Màn hình hiển thị chất lượng</h3>

                                <p>Màn hình iPhone 13 128GB không có nhiều nâng cấp so với các model iPhone
                                    13 Pro và iPhone 13 Pro Max. Theo đó, máy vẫn sử dụng tấm nền OLED cao
                                    cấp với kích thước 6,1 inch và độ phân giải Full HD+. Mặc dù chỉ được
                                    hỗ trợ tốc độ làm mới 60Hz tiêu chuẩn, nhưng chất lượng hiển thị
                                    cũng được đánh giá cao với màu sắc rực rỡ, hình ảnh tái hiện một
                                    cách chân thật.</p>

                                <p style="text-align: center;"><img
                                        alt="Màn hình iPhone 13 128GB không có nhiều nâng cấp"
                                        src="https://www.xtmobile.vn/vnt_upload/product/10_2021/man-hinh-iphone-13-128gb-xtmobile.jpg"
                                        style="width: 680px; height: 510px;"></p>

                                <p>Điều này chắc chắn đáp ứng tốt nhu cầu trải nghiệm người dùng từ xem
                                    phim, chơi game, lướt web...Công nghệ bảo mật nhận diện khuôn mặt - Face
                                    ID sẽ nhận được một vài nâng cấp đáng chú ý, cho phép nhận diện ở
                                    nhiều góc độ và tốc độ phản hồi nhanh hơn.</p>

                                <h3>Cấu hình iPhone 13 128GB vượt trội
                                </h3>

                                <p>Sự xuất hiện của chip A15 Bionic chắc chắn sẽ mang đến hiệu năng cực
                                    kỳ tốt cho iPhone 13 128GB. Chipset này được sản xuất trên tiến trình
                                    5nm+ của TSMC, hứa hẹn mang đến hiệu suất hoạt động tốt và tiết kiệm
                                    điện năng hơn so với A14 Bionic trên iPhone 12. Chính vì vậy, mua iPhone 13
                                    chính hãng giá rẻ sẽ mang đến cấu hình vượt trội, đa nhiệm mượt mà.
                                </p>

                                <p style="text-align: center;"><img
                                        alt="Sự xuất hiện của chip A15 Bionic chắc chắn sẽ mang đến hiệu năng cực kỳ tốt cho iPhone 13 128GB"
                                        src="https://www.xtmobile.vn/vnt_upload/product/10_2021/camera-iphone-13-128gb-xtmobile.jpg"
                                        style="width: 680px; height: 510px;"></p>

                                <p>Bộ nhớ lưu trữ trên iPhone 13 không có nhiều nâng cấp so với thế hệ
                                    trước. Thiết bị vẫn chỉ đi kèm với bộ nhớ RAM 4GB và bộ nhớ trong
                                    128GB. Nhìn chung, dung lượng bộ nhớ này có thể đáp ứng tốt việc lưu
                                    trữ cũng như hỗ trợ đa nhiệm mượt mà cho người dùng. Tất nhiên, Apple
                                    cũng sẽ mang đến khả năng kết nối 5G ấn tượng cho loạt iPhone mới với
                                    nhiều tiện ích hơn.</p>

                                <p>Ngoài sở hữu cấu hình mạnh mẽ, loạt iPhone mới còn được Apple trang
                                    bị viên pin lớn hơn hứa hẹn mang đến thời lượng sử dụng cải thiện
                                    đáng kể cho người dùng.&nbsp;<span style="text-align: center;">&nbsp;Bên
                                        cạnh đó, điện thoại cũng sẽ được cải tiến pin thông qua việc
                                        triển khai lại bảng mạch pin và phụ kiện sạc linh hoạt mới.</span>
                                </p>

                            </div>
                            <button class="less-evaluation text-center" style="display:none"><i
                                    class="fa fa-minus-circle"></i> Rút gọn</button>
                            <button class="more-evaluation text-center"><i class="fa fa-plus-circle"></i> Xem
                                thêm</button>

                        </div>
                        <div class="description-right">
                            <h2 class="dgctpro">Thông số kĩ thuật</h2>
                            <table class="charactestic_table">
                                <tbody>
                                    <tr>
                                        <td class="title_charactestic" width="30%">
                                            Hệ điều hành:
                                        </td>
                                        <td class="content_charactestic">
                                            iOS 15
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="30%">
                                            Màn hình:
                                        </td>
                                        <td class="content_charactestic">
                                            Super Retina XDR OLED, 120Hz, HDR10, Dolby Vision, 1000 nits (typ), 1200
                                            nits (peak)
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="30%">
                                            Mặt kính cảm ứng:
                                        </td>
                                        <td class="content_charactestic">
                                            Gorilla Glass
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="30%">
                                            Màn hình rộng:
                                        </td>
                                        <td class="content_charactestic">
                                            6.1 inch (chiếm khoảng 86.0% thân máy)
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="30%">
                                            Độ phân giải:
                                        </td>
                                        <td class="content_charactestic">
                                            1170 x 2532 pixels, 19.5:9
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="30%">
                                            Ram:
                                        </td>
                                        <td class="content_charactestic">
                                            6GB
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="30%">
                                            Bộ nhớ trong:
                                        </td>
                                        <td class="content_charactestic">
                                            128GB
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="30%">
                                            CPU:
                                        </td>
                                        <td class="content_charactestic">
                                            Apple A15 Bionic (5 nm) 6 nhân
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="30%">
                                            Chip đồ họa (GPU):
                                        </td>
                                        <td class="content_charactestic">
                                            Apple GPU (5 nhân)
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="30%">
                                            Camera Sau:
                                        </td>
                                        <td class="content_charactestic">
                                            12 MP, f/1.5, 26mm (wide), 1.9µm, dual pixel PDAF, sensor-shift
                                            stabilization (IBIS) 12 MP, f/2.8, 77mm (telephoto), PDAF, OIS, 3x optical
                                            zoom 12 MP, f/1.8, 120˚, 13mm (ultrawide), PDAF
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="30%">
                                            Camera trước:
                                        </td>
                                        <td class="content_charactestic">
                                            12 MP, f/2.2, 23mm (wide), 1/3.6"
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="30%">
                                            Thẻ sim:
                                        </td>
                                        <td class="content_charactestic">
                                            1 SIM (Nano-SIM và/hoặc eSIM) hoặc 2 SIM (2 Nano-SIM)
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="30%">
                                            Thẻ nhớ ngoài:
                                        </td>
                                        <td class="content_charactestic">
                                            Không
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="30%">
                                            Dung lượng pin:
                                        </td>
                                        <td class="content_charactestic">
                                            Sạc nhanh 20W, đầy 50% trong 30 phút
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="30%">
                                            Màu sắc:
                                        </td>
                                        <td class="content_charactestic">
                                            Than Chì, Vàng, Bạc, Xanh Sierra
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box" id="product">
                        <div class="box-body">
                            <div class="highlights">
                                <h4 class="product-small-title">Highlights</h4>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <ul class="arrow">
                                            <li>12.2 MP Rear | 8 MP Front Camera </li>
                                            <li>4GB RAM </li>
                                            <li>2700 mAh battery</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <ul class="arrow">
                                            <li>Android 8.0 </li>
                                            <li>Qualcomm Snapdragon 835</li>
                                            <li>Fingerprint Sensor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="highlights">
                                <h4 class="product-small-title">Specification</h4>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h4>General</h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb30">
                                        <ul>
                                            <li>Brand</li>
                                            <li>Model Number </li>
                                            <li>Body Material</li>
                                            <li>Sim Size</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb30">
                                        <ul>
                                            <li style="color: #1c1e1e;">Google Pixel </li>
                                            <li style="color: #1c1e1e;">Google XYZ</li>
                                            <li style="color: #1c1e1e;">Metal and Polycarbonate</li>
                                            <li style="color: #1c1e1e;">Micro</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h4>Display</h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <ul>
                                            <li>Screen Size </li>
                                            <li>Display Resolution </li>
                                            <li>Pixel Density</li>
                                            <li>Screen Protection </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <ul>
                                            <li style="color: #1c1e1e;">5 inch </li>
                                            <li style="color: #1c1e1e;">1280 X 720 Pixels</li>
                                            <li style="color: #1c1e1e;">294 PPI</li>
                                            <li style="color: #1c1e1e;">Gorilla Glass 4</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- rating reviews  -->
            <div id="rating">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="box container-rating-review">
                            <div class="box-head">
                                <h3 class="head-title">Đánh giá và nhận xét</h3>
                            </div>
                            <div class="box-body">
                                <div class="row  rating-box">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="rating-review">
                                            <div class="">
                                                <h1 class="score-rating">4</h1>
                                            </div>
                                            <div>
                                                <div class="product-rating">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <p class="text-secondary">12 nhận xét</p>
                                            </div>
                                        </div>
                                        <div class="rating-view-details">
                                            <div class="rating-level">
                                                <div class="product-rating">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                                <span>12</span>
                                            </div>

                                            <div class="rating-level">
                                                <div class="product-rating">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <span>0</span>
                                            </div>
                                            <div class="rating-level">
                                                <div class="product-rating">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <span>0</span>
                                            </div>

                                            <div class="rating-level">
                                                <div class="product-rating">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <span>0</span>
                                            </div>
                                            <div class="rating-level">
                                                <div class="product-rating">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <span>0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row review-box">
                                    <div class="customer-reviews">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p class="reviews-text"><span class="text-default">Nika Nguyen</span> </p>
                                            <div class="product-rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <p>Giao hàng siêu đúng hẹn, hàng cũng được đóng gói cẩn thận.
                                                Hiện tại mình xài được vài bữa thì không bị vấn đề gì.
                                                Hàng của shopdunk thì không lo về chất lượng.</p>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="divider-line"></div>
                                        </div>
                                    </div>
                                    <div class="customer-reviews">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p class="reviews-text"> <span class="text-default">Lưu Tee</span>
                                            </p>
                                            <div class="product-rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>

                                            <p>Mặc dù vận chuyển lâu do lỗi, nhưng shop vẫn hỗ trợ mình rất nhiệt tình
                                            </p>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="divider-line"></div>
                                        </div>
                                    </div>
                                    <div class="customer-reviews">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p class="reviews-text"> <span class="text-default">William
                                                    Cassidy</span>
                                            </p>
                                            <div class="product-rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>

                                            <p>Sản phẩm rất tốt vì là lần đầu tôi mua trên mạng đt nên thấy khá là lo
                                                lắng nhưng khi nhận đc hàng thì tôi lại thấy tốt hơn mong đợi của mình
                                                chúc Shop làm ăn mua may bán đắt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div id="review">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="box">
                                <div class="box-head">
                                    <h3 class="head-title">Đánh giá và nhận xét của bạn</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="review-form">

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 review-left">
                                                <div class="review-rating">
                                                    <h4>Đánh giá của bạn về sản phẩm này</h4><br />
                                                    <div class="star-rate" id="rateYo"></div>
                                                </div>
                                            </div>
                                            <form class="review-right">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label sr-only " for="name"></label>
                                                        <input id="name" type="text" class="form-control"
                                                            placeholder="Họ tên" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label sr-only " for="email"></label>
                                                        <input id="email" type="text" class="form-control"
                                                            placeholder="Email" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label sr-only " for="textarea"></label>
                                                        <textarea class="form-control" id="textarea" name="textarea"
                                                            rows="4" placeholder="Mời bạn nhập bình luận"></textarea>
                                                    </div>
                                                    <button id="submit" name="singlebutton" class="btn btn-primary">Gửi
                                                        đánh giá</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.reviews-form -->

            </div>


        </div>
        <!-- /.product-description -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box-head">
                        <h3 class="head-title">Sản phẩm liên quan</h3>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <!-- product -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb30">
                            <div class="product-block">
                                <div class="product-img"><img src="images/product_img_1.png" alt=""></div>
                                <div class="product-content">
                                    <h5><a href="#" class="product-title">Google Pixel <strong>(128GB,
                                                Black)</strong></a></h5>
                                    <div class="product-meta"><a href="#" class="product-price">$1100</a>
                                        <a href="#" class="discounted-price">$1400</a>
                                        <span class="offer-price">20%off</span>
                                    </div>
                                    <div class="shopping-btn">
                                        <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.product -->
                        <!-- product -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb30">
                            <div class="product-block">
                                <div class="product-img"><img src="images/product_img_2.png" alt=""></div>
                                <div class="product-content">
                                    <h5><a href="#" class="product-title">HTC U Ultra <strong>(64GB, Blue)</strong></a>
                                    </h5>
                                    <div class="product-meta"><a href="#" class="product-price">$1200</a>
                                        <a href="#" class="discounted-price">$1700</a>
                                        <span class="offer-price">10%off</span>
                                    </div>
                                    <div class="shopping-btn">
                                        <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.product -->
                        <!-- product -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb30">
                            <div class="product-block">
                                <div class="product-img"><img src="images/product_img_3.png" alt=""></div>
                                <div class="product-content">
                                    <h5><a href="#" class="product-title">Samsung Galaxy Note 8</a></h5>
                                    <div class="product-meta"><a href="#" class="product-price">$1500</a>
                                        <a href="#" class="discounted-price">$2000</a>
                                        <span class="offer-price">40%off</span>
                                    </div>
                                    <div class="shopping-btn">
                                        <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.product -->
                        <!-- product -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb30">
                            <div class="product-block">
                                <div class="product-img"><img src="images/product_img_4.png" alt=""></div>
                                <div class="product-content">
                                    <h5><a href="#" class="product-title">Vivo V5 Plus <strong>(Matte
                                                Black)</strong></a></h5>
                                    <div class="product-meta"><a href="#" class="product-price">$1500</a>
                                        <a href="#" class="discounted-price">$2000</a>
                                        <span class="offer-price">15%off</span>
                                    </div>
                                    <div class="shopping-btn">
                                        <a href="#" class="product-btn btn-like">
                                            <i class="fa fa-heart"></i></a>
                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.product -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.product-single -->
    </div>
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
    <script type="text/javascript" src="js/scrolling-nav.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery.rateyo.min.js"></script>
    <script src="js/jquery.desoslide.js"></script>

    <script type="text/javascript">
        $('#slideshow').desoSlide({
            thumbs: $('ul.slideshow_thumbs li > a'),
            effect: {
                provider: 'animate',
                name: 'fade'
            }

        });
    </script>

    <script type="text/javascript">
        $(function () {
            $("#rateYo").rateYo({
                rating: 3.6,
                starWidth: "25px"
            });

        });
    </script>

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

    <script>
        $(document).ready(function () {
            $('.less-evaluation').click(function () {
                $('.content-desc').css('height', '1180px');
                $(this).css('display', 'none');
                $('.more-evaluation').css('display', 'block');
            })
        })

        $(document).ready(function () {
            $('.more-evaluation').click(function () {
                $('.content-desc').css('height', 'auto');
                $(this).css('display', 'none');
                $('.less-evaluation').css('display', 'block');
            })
        })

        $(document).ready(function () {
            $('.page-scroll').click(function () {
                $('.page-scroll').removeClass('active');
                $(this).addClass('active');
            })
        })
    </script>


</body>

</html>