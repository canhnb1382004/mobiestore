<?php   
  include('db/connect.php');
  session_start();
  if(isset($_SESSION['user']['login'])){
      
    unset($_SESSION['user']['login']);
    unset($_SESSION['user']['id']);
    header("Location:index.php");
  }
?>