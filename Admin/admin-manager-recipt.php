<?php   
  include('../db/connect.php');
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


      <div class="container-fluid">
        <div class="border mt-3">
          <h4 class="text-center mt-3 mb-4">Quản lí đơn hàng</h4>
          <div class="row">
            <div class="show-page mb-3 ml-3">
              Hiển thị <span> <select id="show" onclick="select_page()">
                  <option value="10">
                    10
                  </option>
                  <option value="20">
                    20
                  </option>
                  <option value="50">
                    50
                  </option>
                </select></span> cột
            </div>
            <div class="show-page " style="margin-left: 50px;">

              Tìm kiếm <span> <input id="myInput" style="padding-left: 15px; border: 0.5px solid grey;" type="text"
                  placeholder="Search.."></span>
            </div>
          </div>
          <table class="table table-hover table-text-center" id="receipt-table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Mã khách hàng</th>

                <th scope="col">Tổng giá trị</th>
                

                <th scope="col">Chi tiết đơn hàng</th>
                <th scope="col">Xác nhận đơn hàng</th>

              </tr>
            </thead>
            <tbody id="content-table">
              <tr>
                <td>DH01</td>
                <td>KH01</td>

                <td>
                  20,200,000
                </td>
                

                <td class="detail"><a data-toggle="modal" data-target="#exampleModal" href='#'> Chi tiết <i
                      class="fa fa-external-link-alt"></i></a>


                  <!-- Modal -->

                </td>
                <td class="confirm">
                  <span>
                    <input class="confirm-check" type="checkbox" value="confirm-check" name="confirm-check">
                    <label title="Xác nhận đơn hàng" class="label-check active" data-toggle="modal"><i
                        class="fas fa-check-square"></i></label>
                    <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Xác nhận đơn hàng</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <i aria-hidden="true">&times;</i>
                            </button>
                          </div>
                          <div class="modal-body">
                            Bạn có muốn xác nhận đơn hàng này không?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Xác
                              nhận</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </span>

                  <span>
                    <input class="confirm-check" type="checkbox" value="confirm-delivered" name="confirm-deliverd">
                    <label title="Xác nhận vận chuyển thành công" class="label-delivered disable"><i
                        class="fas fa-truck"></i></label>
                    <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Xác nhận vận chuyển</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <i aria-hidden="true">&times;</i>
                            </button>
                          </div>
                          <div class="modal-body">
                            Bạn có muốn xác nhận vận chuyển thành công?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Xác
                              nhận</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </span>
                  <span>
                    <input class="confirm-check" type="checkbox" value="confirm-cancel" name="confirm-cancel">
                    <label title="Hủy đơn hàng" data-toggle="modal" class="label-cancel warning"><i
                        class="fas fa-trash"></i></label>
                    <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Xác nhận hủy đơn</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <i aria-hidden="true">&times;</i>
                            </button>
                          </div>
                          <div class="modal-body">
                            Bạn có muốn xác nhận hủy đơn hàng này không?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Xác
                              nhận</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </span>

                </td>
              </tr>
              
              </tr>
            </tbody>



          </table>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog  detail-modal">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h5>Đơn hàng: DH01</h5>
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
                    <tr>


                      <td>KH01</td>
                      <td>Trần Thanh Bảo</td>
                      <td><span title="Số điện thoại"> 09128374822</span></td>
                      <td>Thanh toán khi nhận hàng</td>
                      <td style="min-width: 300px;"> Khu phố 6, phường Linh Trung, quận Thủ Đức,TP Hồ Chí Minh</th>

                    </tr>
                  </table>
                  <table width="100%" class="text-center  table content-detail  table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th>Hình ảnh</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Màu sắc</th>
                        <th>Số lượng</th>
                        <th> Giá</th>

                      </tr>
                    </thead>
                    <tr>
                      <td style="max-width: 140px;"><img src="../images/Product/i12black.png" width="100px"
                          height="100px" alt=""></td>
                      <td>SP01</td>
                      <td>IPhone X 64GB</td>
                      <td><span title="Số điện thoại"> Đen</span></td>
                      <td style="min-width: 300px;">1</th>
                      <td style="min-width: 300px;">17.000.000<span style="text-decoration: underline;">đ</span></th>
                    </tr>
                    <tr>
                      <td style="max-width: 140px;"><img src="../images/Product/samsung.png" width="100px"
                          height="100px" alt=""></td>
                      <td>SP02</td>
                      <td>Samsung Galaxy S10</td>
                      <td><span title="Số điện thoại">Trắng</span></td>
                      <td style="min-width: 300px;">1</th>
                      <td style="min-width: 300px;">23.000.000<span style="text-decoration: underline;">đ</span></th>
                    </tr>
                  </table>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-navigation">
          <div class="beta"> <button onclick="previous_page()"> Trước</button>
            <span id="page-number">

            </span>
            <button onclick="next_page()"> Sau</button>
          </div>
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