<?php
   include "includes/connect.php";
  //print_r($_REQUEST);exit;
  $id=$_REQUEST['id'];
  $type='';
  if(!empty($_REQUEST['id'])) {
    $query ="SELECT * FROM feedback WHERE admin_id='$id' and faculty_knw IS NULL";
    $results = mysqli_query($conn, $query);
    $queryx ="SELECT * FROM add_details WHERE id='$id'";
    $resultsx = mysqli_query($conn, $queryx);
    foreach($resultsx as $t) {
        $type = $t['fac_type'];
    }
  }  
?>

<h6>Names : </h6>

<ol>

<?php
 if($type=='internal'){
  foreach($results as $feedback) {
    $sqlz = "SELECT * from attendance where user_id='".$feedback['user_id']."' and admin_id='".$id."'";
    $exez = mysqli_query($conn, $sqlz);
    if($exez->num_rows > 0){
                             
?> 
   <li> <?php echo $feedback["user_name"]; ?> </li>
<?php
      }
    }
  }
 if($type=='external'){
  foreach($results as $feedback) {
                             
?> 
   <li> <?php echo $feedback["user_name"]; ?> </li>
<?php
      }
 }
?>
</ol>