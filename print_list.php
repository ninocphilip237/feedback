<?php
session_start();
include "includes/connect.php";
$sql="SELECT * from add_details";
$exe=mysqli_query($conn,$sql);


?>



<!DOCTYPE html>
<html lang="en">
<?php

if(!isset($_SESSION['log']))
  header("location:login.php");
?>
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">

		<div class="container-table100">

			<div class="wrap-table100">
				<a href="admin_home.php"><h3><font color="white">Home</font></h3></a><br>
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Name of the training</th>
								<th class="column1">Duration</th>
								<th class="column1">Date</th>
								<th class="column1">Venue</th>
								<th class="column2">Faculty</th>
								<th class="column3">Course Objective</th>
								<th class="column4">Forms</th>
								<th class="column5">Edit</th>
								<th class="column6">URL</th>
							</tr>




						</thead>
						<?php
while($a=mysqli_fetch_array($exe)) 
{
  ?>
						<tbody>
								<tr>
									<td class="column1"><?php echo $a['name']?></td>
									<td class="column1"><?php echo $a['duration']?></td>
									<td class="column1"><?php echo $a['date']?></td>
									<td class="column1"><?php echo $a['venue']?></td>
									<td class="column2"><?php echo $a['faculty']?></td>
									<td class="column3"><?php echo $a['course']?></td>
									<td class="column4"><a href="print.php?feedback_id=<?php echo $a['id']?>">See All forms</a></td>
									<td class="column5"><a href="edit_form.php?edit_id=<?php echo $a['id']?>">Edit </a></td>
									<td class="column6"><a href="form.php?z=<?php echo $a['id']?>"> URL</a></td>
								</tr>
								
    
   
								
								
						</tbody>
						<?php
					}
					?>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>