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

  <title>Admin - Mobile Shop</title>

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

  <script>
    $(document).ready(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

</body>

</html>