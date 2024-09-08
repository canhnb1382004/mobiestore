<?php   
  include('../db/connect.php');
?>

<?php 
if(isset($_POST['capnhatsanpham'])) {
  $id_update = $_POST['id_update'];
  $tensanpham = $_POST['tensanpham'];
  $giasanpham = $_POST['giasanpham'];
  $tenthuonghieu = $_POST['tenthuonghieu'];
  $giakhuyenmai = $_POST['giakhuyenmai'];
  $active = $_POST['loaisanpham']; 
  $hinhanh = $_FILES['hinhanh']['name'];  
  $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
  $path = '../imagine_product/';
  if($hinhanh==''){
    $sql_update_imagine = "UPDATE tbl_sanpham SET sanpham_name='$tensanpham',sanpham_thuonghieu='$tenthuonghieu' ,sanpham_gia='$giasanpham',sanpham_giakhuyenmai='$giakhuyenmai', sanpham_active='$active' WHERE sanpham_id='$id_update'";
  }else{
    move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
    $sql_update_imagine = "UPDATE tbl_sanpham SET sanpham_name='$tensanpham',sanpham_thuonghieu='$tenthuonghieu' ,sanpham_gia='$giasanpham',sanpham_giakhuyenmai='$giakhuyenmai',sanpham_imagine='$hinhanh',sanpham_active='$active' WHERE sanpham_id='$id_update'";
  }
  mysqli_query($conn,$sql_update_imagine);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Chỉnh sửa sản phẩm</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../css/all.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="../fonts/fontawesome-free-5.15.4-web/css/all.min.css">
  </link><!-- Custom styles for this template -->
  <link href="../css/css_admin/admin.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/css_admin/admin1.css">
  <link rel="stylesheet" href="../js/js_admin/script.js">
  <!-- (1): Khai báo sử dụng thư viện CKEditor -->
  <script src="../ckeditor/ckeditor.js"></script>
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
          </ul>
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
                  <button type="button" class="btn btn-primary">Đăng xuất</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="container">
        <?php
			if(isset($_GET['quanly'])=='capnhat'){
				$id_capnhat = $_GET['capnhat_id'];
				$sql_capnhat = mysqli_query($conn,"SELECT * FROM tbl_sanpham,tbl_category WHERE tbl_sanpham.category_id=tbl_category.category_id AND sanpham_id='$id_capnhat'");
				$row_capnhat = mysqli_fetch_array($sql_capnhat);
				
      ?>
          <h2 style="text-align: center;">Chỉnh sửa sản phẩm</h2>
        
          <form action="" method="POST" enctype="multipart/form-data">
          
              <div class="row">
                <div class="col-6 space-top">
                  <h5 class="spacing_form">Tên sản phẩm</h5>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                      <input type="text" class="form-control py-4" name='tensanpham' value="<?php echo $row_capnhat['sanpham_name'] ?>" placeholder="Nhập tên sản phẩm">
                    </div>
                   
                  </div>
                </div>
                <div class="col-6 space-top">
                  <h5 class="spacing_form">Giá bán(VND)</h5>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                    </div>
                    <input type="text"  class="form-control py-4" name='giasanpham' value="<?php echo $row_capnhat['sanpham_gia'] ?>" placeholder="Nhập Giá Bán">
                    <input type="hidden" class="form-control" name="id_update" value="<?php echo $row_capnhat['sanpham_id'] ?>">
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-6 space-top">
                  <h5 class="spacing_form">Tên Thương hiệu</h5>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                    </div>
                    <input type="text"  class="form-control py-4" name='tenthuonghieu' value="<?php echo $row_capnhat['category_name'] ?>" placeholder="Nhập tên thương hiệu">
                  </div>
                </div>
                <div class="col-6 space-top">
                  <h5 class="spacing_form">Giá bán Khuyến mãi(VND)</h5>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                    </div>
                    <input type="text"  class="form-control py-4" name='giakhuyenmai' value="<?php echo $row_capnhat['sanpham_giakhuyenmai'] ?>" placeholder="Nhập Giá Khuyến Mãi" >
                  </div>
                </div>
              </div>
            
              <div class="row">
                <div class="col-6 space-top">
                  <h5 class="spacing_form">Hình Ảnh</h5>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                    </div>
                    <input type="file"  class="form-control py-4" name='hinhanh' value="<?php echo $row_capnhat['sanpham_imagine'] ?>" placeholder="Nhập Hình Ảnh" >
                  </div>
                </div>
                <div class="col-6 space-top">
                <h5 class="spacing_form">Loại Sản Phẩm</h5>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                  </div>
                  <select class="form-control " name="loaisanpham" >
                    <option value="">Nhập Loại Sản Phẩm</option>
                    <option  value="Sản Phẩm Bán Chạy">Sản Phẩm Bán Chạy</option>
                    <option  value="Sản Phẩm Mới">Sản Phẩm Mới</option>
                    <option  value="Sản Phẩm Khuyến Mãi">Sản Phẩm Khuyến Mãi</option>
                  </select>
                </div>
              </div>
              </div>
                    
              <div class="row" style="margin-top: 60px;">
                <input class="btn btn-danger col-sm-3 row space-top space-bottom " name='capnhatsanpham' type="submit" value="Chỉnh Sửa Sản Phẩm">
              </div>
                 
          </form>
          <?php
        }
				?>
        </div>
        
      </div>
      
    </div>

    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->
  
  


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
  <script src="../js/js_admin/divide-page.js"></script>

  <!-- chkeditor -->
  <script src="../ckeditor/ckeditor.js"></script>
  <script>CKEDITOR.replace('ten');</script>
  <!-- /chkeditor -->

  <!-- add color -->


</body>

</html>