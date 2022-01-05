<?php
session_start();
// if(!isset($_SESSION['log']))
//   header("location:login.php");
$form_id=$_GET['edit_id'];
include "includes/connect.php";
$sql="select  * from add_details where id='$form_id'";
 $exe3=mysqli_query($conn,$sql);
 $edit_fetch_data=mysqli_fetch_array($exe3);
if(isset($_POST['sub']))
{
    
    $name_of_train=$_POST['name_of_training'];
    $duration=$_POST['duration'];
    $date=$_POST['date'];
    $venue=$_POST['venue'];
    $faculty=$_POST['faculty'];
    $course=$_POST['course'];
    




    
    $sql1="update add_details set name='$name_of_train',duration='$duration',date='$date',venue='$venue',faculty='$faculty',course='$course' where id=$form_id";
   $exe=mysqli_query($conn,$sql1);
   echo mysqli_error($conn);
  header("location:print_list.php");
   

}
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
      <style type="text/css">
textarea 
{
  resize: none;
}
.bg {
  
  
  background-image: url("assets/images/wp37411.jpg");
  height: px; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
      </style>  
        
        
        
    </head>
    <body>


        <div class="container bg" >
          <a href="admin_home.php"><h3><font color="red">Home</font></h3></a>
            
            <div class="row ">
                <div class="col-md-6 col-md-offset-3 form-container">
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  
                    <h2>CMMI Training programme - Trainee </h2><h4 align="center">VSPL/FM/25, V1.0</h4>
                    <p><h4> Please provide training detailss: </h4></p>
                    <form role="form" method="post" > 

                                     
  



                         <div class="form-group">
    <label for="inputdefault">Name of the training</label>
    <input class="form-control" id="inputdefault" type="text" name="name_of_training" value="<?php echo $edit_fetch_data['name'] ?>" >
  </div>

  
 <div class="row">
            <div class="form-group col-xs-6">
                <label for="inputdefault">Duration</label>
                <input id="duration" class="form-control input-group-lg reg_name" type="text" name="duration" value="<?php echo $edit_fetch_data['duration'] ?>" >
            </div>

            <div class="form-group col-xs-6">
                <label for="inputdefault">Date</label>
                <input id="date" class="form-control input-group-lg reg_name" type="date" name="date" value="<?php echo $edit_fetch_data['date'] ?>" >
            </div>
        </div>
                                  <div class="form-group">
    <label for="inputdefault">Venue</label>
    <input class="form-control" id="inputdefault" type="text" name="venue" value="<?php echo $edit_fetch_data['venue'] ?>" >

  </div>
                                   <div class="form-group">
    <label for="inputdefault">Faculty/Faculties</label>
    <input class="form-control" id="inputdefault" type="text" name="faculty" value="<?php echo $edit_fetch_data['faculty'] ?>" >
  </div>
                                   <div class="form-group">
    <label for="inputdefault">Course objective</label>
    <input class="form-control" id="inputdefault" type="text" name="course" value="<?php echo $edit_fetch_data['course'] ?>" >
  </div>
                                  
<div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-warning btn-block" name="sub" >Update </button>

                            </div>
                        </div>



                        
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>