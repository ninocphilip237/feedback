<?php
   include "includes/connect.php";
  //print_r($_REQUEST);exit;
	$id=$_REQUEST['id'];
  if(!empty($_REQUEST['id'])) {
    $query ="SELECT * FROM feedback WHERE admin_id='$id'";
    $results = mysqli_query($conn, $query);
?>

<h6>Names : </h6>

<ol>

<?php
  foreach($results as $feedback) {
    $query1 ="SELECT * FROM feedback_effectiveness WHERE admin_id='$id' and user_id='".$feedback['user_id']."'";
    $results1 = mysqli_query($conn, $query1);
        if (mysqli_num_rows($results1)==0){

?> 
   <li> <?php echo $feedback["user_name"]; ?> </li>
<?php
        }
    }
  }
?>
</ol>