
<?php
$delete_id=$_GET['dlt_id'];
include "includes/connect.php";

$sql1="delete from feedback where id='$delete_id'";
$exe1=mysqli_query($conn,$sql1);

	header("location:tables.php");
?>



