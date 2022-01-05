<?php
include "includes/connect.php";
if(isset($_POST['sub']))
{
    
    $name_of_training=$_POST['name_of_training'];
    $duration=$_POST['duration'];
    $date=$_POST['date'];
    $venue=$_POST['venue'];
    $faculty=$_POST['faculty'];
    $course=$_POST['course'];
    




    $sql1="insert into add_details(name,duration,date,venue,faculty,course)
    values('$name_of_training','$duration','$date','$venue','$faculty','$course')";
   $exe=mysqli_query($conn,$sql1);
   
   

}
?>

<html lang="en">
<?php
session_start();
if(!isset($_SESSION['log']))
  header("location:login.php");
?>
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
  
  
  background-image: url("assets/images/no.jpg");
  height: px; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bg1 {
  
  
  background-image: url("assets/images/h.jpg");
  height: px; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
      </style>  
        
        
        
    </head>


    <body class="bg">


        <div class="container bg1 " >
         <a href="admin_home.php"><h3><font color="white">Home</font></h3></a> 
            
            <div class="row ">
                <div class="col-md-6 col-md-offset-3 form-container">
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  
                    <h2>CMMI Training programme - Trainee </h2><h4 align="center">VSPL/FM/25, V1.0</h4>
                    <p><h4> Please provide training detailss: </h4></p>
                    <form role="form" method="post"> 

                                     
  



                         <div class="form-group">
    <label for="inputdefault">Name of the training</label>
    <input class="form-control"  type="text" name="name_of_training" required="" >
  </div>

  
 <div class="row">
            <div class="form-group col-xs-6">
                <label for="inputdefault">Duration</label>
                <input id="duration" class="form-control input-group-lg reg_name" type="text" name="duration" required="" 
                        />
            </div>

            <div class="form-group col-xs-6">
                <label for="inputdefault">Date</label>
                <input id="date" class="form-control input-group-lg reg_name" type="date" name="date" required="" 
                       />
            </div>
        </div>
                                  <div class="form-group">
    <label for="inputdefault">Venue</label>
    <input class="form-control"  type="text" name="venue" required="">

  </div>
                                   <div class="form-group">
    <label for="inputdefault">Faculty/Faculties</label>
    <input class="form-control"  type="text" name="faculty" required="" >
  </div>
                                   <div class="form-group">
    <label for="inputdefault">Course objective</label>
    <input class="form-control"  type="text" name="course" required="">
  </div>
                                  
<div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-warning btn-block" name="sub" >Submit </button>

                            </div>
                        </div>



                        
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>