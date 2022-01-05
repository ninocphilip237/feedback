
<!DOCTYPE html>
<html>
<?php
session_start();
if(!isset($_SESSION['log']))
  header("location:login.php");
?>
<head>
</head>
<body>
  <?php
  include "includes/sidebar.php";
  ?>

</body>

</html>
