<?php
   include "includes/connect.php";
  //print_r($_REQUEST);exit;
	$id=$_REQUEST['id'];
  if(!empty($_REQUEST['id'])) {
    $query ="SELECT * FROM feedback WHERE admin_id='$id' and faculty_knw IS NOT NULL";
    $results = mysqli_query($conn, $query);
?>

<h6>Names : </h6>

<ol>

<?php
  foreach($results as $feedback) {
?> 
   <li> <?php echo $feedback["user_name"]; ?>  &nbsp; &nbsp; &nbsp; <button class="btn btn-secondary btn-sm m-1" data-toggle="tooltip" data-original-title="Clear Response" onclick="clearResponse('<?php echo $feedback['id']; ?>');" > <i class="fa fa-star"> </i> Clear Response </button>  <button class="btn btn-secondary btn-sm m-1" data-toggle="tooltip" data-original-title="Delete Response" onclick="deleteResponse('<?php echo $feedback['id']; ?>');" > <i class="fa fa-trash"> </i> Delete Response </button> </li>
<?php
    }
  }
?>
</ol>