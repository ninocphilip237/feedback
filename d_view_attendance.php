<?php
   include "includes/connect.php";
  //print_r($_REQUEST);exit;
	$id=$_REQUEST['id'];
  if(!empty($_REQUEST['id'])) {
    $query ="SELECT DISTINCT date,duration,admin_id FROM attendance WHERE admin_id='$id' ";
    $results = mysqli_query($conn, $query);
?>

<h6>Date(s) : </h6>

<ol>

<?php
  foreach($results as $feedback) {
?> 
   <li> <?php echo $feedback["date"]; ?> , <?php echo $feedback["duration"]; ?> Hr(s) <a href="javascript:void(0);" class="btn btn-secondary btn-sm m-1" data-toggle="tooltip" data-original-title="Delete Attendance for this day" onclick="deleteAttendance('<?php echo $feedback["admin_id"]; ?>','<?php echo $feedback["date"]; ?>');"> <i class="fa fa-trash"> </i> Delete Attendance </a> </li>
<?php
    }
  }
?>
</ol>