<?php
session_start();
if (isset($_SESSION['user_type']) && !empty($_SESSION['user_type'])) {
  if($_SESSION['user_type'] == 'admin'){
    header("location:dashboard.php");
  }
  else{
    header("location:user_dashboard.php");
  }
}
else{
  header("location:login.php");
}
?>
