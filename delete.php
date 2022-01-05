
<?php
$delete_id=$_GET['dlt_id'];
include "includes/connect.php";
$sql="delete from add_details where id='$delete_id'";
$exe=mysqli_query($conn,$sql);
$sql1="delete from feedback where admin_id='$delete_id'";
$exe1=mysqli_query($conn,$sql1);
$sql2="delete from feedback_trainer where admin_id='$delete_id'";
$exe2=mysqli_query($conn,$sql2);
$sql3="delete from feedback_effectiveness where admin_id='$delete_id'";
$exe3=mysqli_query($conn,$sql3);
$sql4="delete from faculty where admin_id='$delete_id'";
$exe4=mysqli_query($conn,$sql4);
	header("location:tables.php");
?>



