<?php   
  include('../db/connect.php');
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đơn hàng bị hủy</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!---->
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="../css/css_admin/admin1.css">
    <link rel="stylesheet" href="../css/css_admin/admin.css">
    <link rel="stylesheet" href="../js/js_admin/script.js">
</head>

<body>
    <!-- Left Panel -->

    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

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
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#log-out">Đăng xuất <span
                                    class="log-out"><i class="fas fa-arrow-right"></i></span></a>
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


            <div class="container-fluid">
                <div class="mb-5 mt-3 ">
                    <div class="content">
                        <div class="animated fadeIn">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class=" mb-2">
                                                <h4 class="text-center mt-3 mb-4">Danh sách đơn hàng bị hủy</h4>
                                                <div class="row">
                                                    
                                                    <div class="show-page " style="margin-left: 50px;">

                                                        Tìm kiếm <span> <input id="myInput"
                                                                style="padding-left: 15px; border: 0.5px solid grey;"
                                                                type="text" placeholder="Search.."></span>
                                                    </div>
                                                </div>
                                                <table id="bootstrap-data-table" class="table  table-hover table-text-center">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Mã đơn hàng</th>
                                                            <th>Mã khách hàng</th>
                                                            <th>Ngày lập</th>
                                                            <th>Chi tiết đơn hàng</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody id="content-table">
                                                        <tr>
                                                            <td>TH01</td>
                                                            <td>KH01</td>
                                                            <td>10/10/2020</td>
                                                            <td class="detail"><a data-toggle="modal"
                                                                    data-target="#exampleModal" href='#'> Chi tiết <i
                                                                        class="fa fa-external-link-alt"></i></a>
                                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog  detail-modal">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">Chi tiết đơn
                                                                                    hàng</h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <h5>Đơn hàng: DH01</h5>
                                                                                <table width="100%"
                                                                                    class="text-center  table content-detail  table-hover">
                                                                                    <thead class="thead-light">
                                                                                        <tr>
                                                                                            <th>Mã khách hàng</th>
                                                                                            <th>Tên khách hàng</th>
                                                                                            <th><span
                                                                                                    title="Số điện thoại">
                                                                                                    SDT</span></th>
                                                                                            <th
                                                                                                style="min-width: 300px;">
                                                                                                Địa chỉ</th>
                                                                                            <th> Tên sản phẩm &amp; số
                                                                                                lượng </th>
                                                                                            <th>Giá </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tr>


                                                                                        <td>KH01</td>
                                                                                        <td>Trần Thanh Bảo</td>
                                                                                        <td><span title="Số điện thoại">
                                                                                                09128374822</span></td>
                                                                                        <td style="min-width: 300px;">
                                                                                            Khu phố 6, phường Linh
                                                                                            Trung, quận Thủ Đức,TP Hồ
                                                                                            Chí Minh</th>
                                                                                        <td>
                                                                                            <p>Iphone 12 64GB <span
                                                                                                    class="font-weight-bold">x</span>
                                                                                                2 </p>
                                                                                            <p>Iphone X 32GB <span
                                                                                                    class="font-weight-bold">x</span>
                                                                                                2 </p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p>24,000,000</p>
                                                                                            <p>7,000,000
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal">Đóng</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td>TH02</td>
                                                            <td>KH01</td>
                                                            <td>10/10/2020</td>
                                                            <td class="detail"><a href='#'> Chi tiết <i
                                                                        class="fa fa-external-link-alt"></i></a></td>

                                                        </tr>
                                                        <tr>
                                                            <td>TH03</td>
                                                            <td>KH03</td>
                                                            <td>10/10/2020</td>
                                                            <td class="detail"><a href='#'> Chi tiết <i
                                                                        class="fa fa-external-link-alt"></i></a></td>

                                                        </tr>
                                                        <tr>
                                                            <td>TH04</td>
                                                            <td>KH04</td>
                                                            <td>10/10/2020</td>
                                                            <td class="detail"><a href='#'> Chi tiết <i
                                                                        class="fa fa-external-link-alt"></i></a></td>

                                                        </tr>





                                                </table>

                                                <div class="page-navigation">
                                                    <div class="beta"> <button onclick="previous_page()"> Trước</button>
                                                        <span id="page-number">

                                                        </span>
                                                        <button onclick="next_page()"> Sau</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div><!-- .animated -->
                        </div><!-- .content -->


                        <!-- Add -->
                        <div class="modal fade" id="add" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Thêm User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Đóng</button>
                                        <button type="button" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /#right-panel -->
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>

        <!-- Right Panel -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="../js/js_admin/divide-page.js"></script>
        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#bootstrap-data-table-export').DataTable();
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

</body>

</html>