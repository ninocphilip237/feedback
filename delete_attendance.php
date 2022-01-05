
<?php
$delete_id=$_GET['dlt_id'];
$form = $_GET['form'];
include "includes/connect.php";

$sql1="delete from attendance where id='$delete_id'";
$exe1=mysqli_query($conn,$sql1);

	header("location:attendance_edit.php?id=".$form);
?>



