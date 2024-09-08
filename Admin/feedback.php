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
  <title>Phản hồi khách hàng</title>
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
      <div class="container-fluid">
        <div class="mb-5 mt-3 ">
          <div class="content">
            <div class="animated fadeIn">
              <div class="row">

                <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">
                      <div class=" mb-2">
                        <h4 class="text-center mt-3 mb-4">Phản hồi của khách hàng</h4>
                        <div class="row">
                          


                          <div class="show-page  arrange">

                            Tìm kiếm <span> <input id="myInput" style="padding-left: 15px; border: 0.5px solid grey;"
                                text" placeholder="Search.."></span>
                          </div>

                        </div>

                        <table id="bootstrap-data-table" class="table table-hover text-left">
                          <thead class="thead-light">
                            <tr>
                              <th>Họ tên</th>
                              <th>Email</th>
                              <th>Số điện thoại</th>
                              <th>Thời gian</th>
                              <th>Lời nhắn</th>
                              <th></th>
                            </tr>
                          </thead>

                          <tbody id="content-table">
                            <tr>

                              <td>Trần Thanh Bảo</td>
                              <td>baoCute@gmail.com</td>
                              <td>0122333333</td>
                              <td>20/1/2019</td>
                              <td class="feedback">
                                Dịch vụ chăm sóc khách hàng rất tốt, sản phẩm như mong đợi.
                              </td>
                              <td class="row" style="border: none;">
                                <div style="margin: auto;">
                                  <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal" data-whatever="@mdo"><i
                                      class="text-center fas fa-paper-plane"></i></button>

                                  <button class="btn btn-danger sizeTh1" data-toggle="modal" data-target="#delete"
                                    data-toggle="tooltip" data-placement="top" title="Xóa">
                                    <i class="txt-center menu-icon fas fa-trash-alt"></i>
                                  </button>
                                </div>

                              </td>
                            </tr>


                            <td>Trần Đăng</td>
                            <td>dang@gmail.com</td>
                            <td>01223332</td>
                            <td>20/1/2019</td>
                            <td class="feedback">
                              Mặc hàng tốt,giao nhanh
                            </td>
                            <td class="row" style="border: none;">
                              <div style="margin: auto;">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                  data-target="#exampleModal" data-whatever="@mdo"><i
                                    class="text-center fas fa-paper-plane"></i></button>

                                <button class="btn btn-danger sizeTh1" data-toggle="modal" data-target="#delete"
                                  data-toggle="tooltip" data-placement="top" title="Xóa">
                                  <i class="txt-center menu-icon fas fa-trash-alt"></i>
                                </button>
                              </div>

                            </td>
                            </tr>


                            <td>Nguyễn thị hoa hồng</td>
                            <td>baoCute@gmail.com</td>
                            <td>0122333333</td>
                            <td>20/1/2019</td>
                            <td class="feedback">
                              Dịch vụ chăm sóc khách hàng rất tốt, sản phẩm như mong đợi.
                            </td>
                            <td class="row" style="border: none;">
                              <div style="margin: auto;">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                  data-target="#exampleModal" data-whatever="@mdo"><i
                                    class="text-center fas fa-paper-plane"></i></button>

                                <button class="btn btn-danger sizeTh1" data-toggle="modal" data-target="#delete"
                                  data-toggle="tooltip" data-placement="top" title="Xóa">
                                  <i class="txt-center menu-icon fas fa-trash-alt"></i>
                                </button>
                              </div>

                            </td>
                            </tr>

                            <td>YangHo</td>
                            <td>ho@gmail.com</td>
                            <td>0122333333</td>
                            <td>20/1/2019</td>
                            <td class="feedback">
                              Admin cho e hỏi e mua Note 9 bản 3Gb-64 bây giờ em muốn đổi để lên cơn Note 9 Pro 6Gb-64
                              này thì bên cellphone thu mua con note 9 của em giá bao nhiêu ạ. E cảm ơn
                            </td>
                            <td class="row" style="border: none;">
                              <div style="margin: auto;">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                  data-target="#exampleModal" data-whatever="@mdo"><i
                                    class="text-center fas fa-paper-plane"></i></button>

                                <button class="btn btn-danger sizeTh1" data-toggle="modal" data-target="#delete"
                                  data-toggle="tooltip" data-placement="top" title="Xóa">
                                  <i class="txt-center menu-icon fas fa-trash-alt"></i>
                                </button>
                              </div>

                            </td>
                            </tr>


                            <td>Trần Thanh Trung</td>
                            <td>trung@gmail.com</td>
                            <td>0122333333</td>
                            <td>20/1/2019</td>
                            <td class="feedback">
                              trong tầm giá 5 đến 6tr5 thì máy nào là sự lựa chọn tốt nhất ạ
                            </td>
                            <td class="row" style="border: none;">
                              <div style="margin: auto;">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                  data-target="#exampleModal" data-whatever="@mdo"><i
                                    class="text-center fas fa-paper-plane"></i></button>

                                <button class="btn btn-danger sizeTh1" data-toggle="modal" data-target="#delete"
                                  data-toggle="tooltip" data-placement="top" title="Xóa">
                                  <i class="txt-center menu-icon fas fa-trash-alt"></i>
                                </button>
                              </div>

                            </td>
                            </tr>



                          </tbody>
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
            <!--Modal add-->
            <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Thêm sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Lưu</button>
                  </div>
                </div>
              </div>
            </div>
            <!--/Modal add-->

          </div><!-- /#right-panel -->
        </div>
      </div>
      <!-- /#page-content-wrapper -->
    </div>
    <!-- feedback -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Phản hồi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Gửi tới: <b>baoCute@gmail.com</b></label>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Phản hồi:</label>
                <textarea class="form-control" rows="10" id="message-text"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Gửi phản hồi</button>
          </div>
        </div>
      </div>
    </div>



    <!-- delete product -->
    <!-- Modal -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa phản hồi của khách hàng</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Bạn có muốn xóa phản hồi này.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary">Đồng ý</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Panel -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../js/js_admin/divide-page.js"></script>
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


    <script>
      $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
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