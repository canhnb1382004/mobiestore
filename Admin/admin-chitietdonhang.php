<?php   
  include('../db/connect.php');
  session_start();
?>

<?php 
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Quản lí đơn hàng</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../js/js_admin/script.js">
  <link rel="stylesheet" href="../fonts/fontawesome-free-5.15.4-web/css/all.min.css">
  </link><!-- Custom styles for this template -->
  <link href="../css/css_admin/admin.css" rel="stylesheet" />
</head>

<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->

      <!--Nav-->
      <div class="side-bar bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-center"><b>Mobile Shop</b></div>
            <div class="profile">
                <div class="profile-pic">
                  <img src="images/admin.jpg" alt="">
                </div>
                <div class="profile-info">
                  <span>Welcome</span>
                  <h5>Administrator</h5>
                </div>
              </div>
            <div class="list-group list-group-flush">
                <ul>
                    
                    <li>
                        <a href="dataUser.php" class="list-group-item list-group-item-action ">
                            Thông tin người dùng<i class="menu-icon fas fa-users font-list"></i></a>
                    </li>
                    <li>
                        <a href="dataProduct.php" class="list-group-item list-group-item-action "> Thông tin sản phẩm
                            <i class="menu-icon fas fa-mobile-alt font-list"></i></a>
                    </li>
                    <li>
                        <a href="admin-manager-recipt.php" class="list-group-item list-group-item-action "> Quản lí đơn
                            hàng <i class="menu-icon fas fa-shopping-cart font-list"></i></a>
                    </li>
                    <li>
                        <a href="admin-branch.php" class="list-group-item list-group-item-action active "> Thông
                            tin
                            thương hiệu <i class="menu-icon fas fa-archway"></i></a>
                    </li>
                    
                        
                    <!-- <li>
                        <a href="admin-filter.html" class="list-group-item list-group-item-action "> Dữ liệu lọc <i
                                class="menu-icon fas fa-filter"></i></a>
                    </li> -->
                </ul>
            </div>
        </div>
        <!--/Nav-->
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">
          <i class="fas fa-bars"></i>
        </button>
        <div class="">

        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#log-out">Đăng xuất <span class="log-out"><i
                    class="fas fa-arrow-right"></i></span></a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> -->
            <div class="modal fade" id="log-out" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Xác nhận đăng xuất</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Bạn có muốn đăng xuất?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                  <a href="http://localhost:8080/web-ban-dien-thoai/"><button type="button" class="btn btn-primary">Đăng xuất</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
              
                <table width="100%" class="text-center  table content-detail  table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th>Mã khách hàng</th>
                        <th>Tên khách hàng</th>
                        <th><span title="Số điện thoại"> Số điện thoại</span></th>
                        <th>Hình thức thanh toán</th>
                        <th style="min-width: 300px;"> Địa chỉ</th>
                      </tr>
                    </thead>
                    <?php 
                        if(isset($_GET['id'])){
                            $id=(int)$_GET['id'];
                           
                        }
                        // echo("SELECT * FROM tbl_admin_donhang , tbl_donhang WHERE tbl_admin_donhang.admin_makhachhang =$id AND tbl_donhang.donhang_user = $id ");
                        $sql_donhangchitiet= mysqli_query($conn,"SELECT * FROM tbl_admin_donhang, tbl_khachhang WHERE tbl_admin_donhang.admin_makhachhang =$id AND tbl_khachhang.khachhang_id = $id ");
                        foreach( $sql_donhangchitiet as $row_donhangchitiet ){
                    ?>  
                    <tr>
                    <td><?php echo $row_donhangchitiet['admin_makhachhang'] ?></td>
                    <td><?php echo $row_donhangchitiet['khachhang_name'] ?></td>
                    <td><span title="Số điện thoại"><?php echo $row_donhangchitiet['khachhang_number'] ?></span></td> 
                    <td>Thanh toán khi nhận hàng</td>
                    <td style="min-width: 300px;"></th>
                        <?php echo $row_donhangchitiet['khachhang_diachi'] ?>
                    </tr>
                    <?php
                        } 
                    
                    ?>
                </table>
                  
                <table width="100%" class="text-center  table content-detail  table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th>Hình ảnh</th>
                        
                        <th>Tên sản phẩm</th>
                        
                        <th>Số lượng</th>
                        <th> Giá</th>
                        <th> Giá Khuyến Mãi</th>
                        <th> Thành Tiền </th>
                      </tr>
                    </thead>
                    <?php 
                        if(isset($_GET['id'])){
                            $id=(int)$_GET['id'];
                           
                        }
                        // echo("SELECT * FROM tbl_admin_donhang , tbl_donhang WHERE tbl_admin_donhang.admin_makhachhang =$id AND tbl_donhang.donhang_user = $id ");
                        $sql_donhangchitiet= mysqli_query($conn,"SELECT * FROM tbl_admin_donhang, tbl_donhang WHERE tbl_admin_donhang.admin_makhachhang =$id AND tbl_donhang.donhang_user = $id ");
                        foreach( $sql_donhangchitiet as $row_donhangchitiet ){
                    ?>  
                    <tr>
                      <td style="max-width: 200px;"><img src="../imagine_product/<?php echo $row_donhangchitiet['donhang_product_img'] ?>" width="100px"
                          height="100px" alt="">
                      </td>
                      
                      <td style="min-width: 200px;"><?php echo $row_donhangchitiet['donhang_product_name'] ?></th>
                      
                      <td style="min-width: 200px;"><?php echo $row_donhangchitiet['donhang_product_soluong'] ?></th>
                      <td style="min-width: 200px;"><?php echo $row_donhangchitiet['donhang_product_gia'] ?></th>
                      <td style="min-width: 200px;"><?php echo $row_donhangchitiet['donhang_khuyenmai'] ?></th>
                      <td style="min-width: 200px;"><?php echo $row_donhangchitiet['donhang_thanhtien'] ?></th>
                    </tr>
                    <?php
                        } 
                    
                    ?>
                </table>

           

      <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <!-- search -->
  <script>
    $(document).ready(function () {
      $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#content-table tr").filter(function () {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
  <script src="../js/js_admin/divide-page.js"></script>
  <script src="../js/js_admin/confirmed.js"></script>
</body>

</html>