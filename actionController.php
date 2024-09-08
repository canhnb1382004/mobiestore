<?php   
  include('db/connect.php');
  session_start();
 
?>

<?php   
if(isset($_POST['dangnhap'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql_guess = mysqli_query($conn,"SELECT*FROM tbl_khachhang WHERE khachhang_email='$email' AND khachhang_password='$password' LIMIT 1" );
    $row_guess1 = mysqli_fetch_array($sql_guess);
    $row_guess = mysqli_num_rows($sql_guess);
    if($row_guess > 0){
        
        $_SESSION['user']['login'] = $row_guess1['khachhang_name'] ;
        $_SESSION['user']['id'] = $row_guess1['khachhang_id'];
        
        header("Location:index.php");
        exit();
    }else{

        $sql_admin = mysqli_query($conn,"SELECT*FROM tbl_admin WHERE admin_email='$email' AND admin_password='$password' LIMIT 1" );
        $row_admin = mysqli_num_rows($sql_admin);
        if($row_admin>0){
            header("Location:Admin/admin.php");
            exit();
        }else{
            echo ('<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.")</script>');
            $_SESSION['error'] = "Tài khoản hoặc Mật khẩu không đúng, vui lòng nhập lại.";
            header("Location:login-form.php");
            exit();
        }
        
    }

    // $_SESSION['user']['id'] = $sql_guess['khachhang_id'];
}
?>