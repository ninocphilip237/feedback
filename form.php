<?php
$id=$_GET['z'];
include "includes/connect.php";
$sql="select *from add_details where id='$id'";
 $exe5=mysqli_query($conn,$sql);
 $data_fetch=mysqli_fetch_array($exe5);
if(isset($_POST['sub']))
{
    $name=$_POST['name'];
    $name_of_training=$_POST['name_of_training'];
    $duration=$_POST['duration'];
    $date=$_POST['date'];
    $venue=$_POST['venue'];
    $faculty=$_POST['faculty'];
    $course=$_POST['course'];
    $radio1=$_POST['radio1'];
    $experience=$_POST['experience'];
    $radio3=$_POST['radio3'];
    $radio4=$_POST['radio4'];
    $weakness=$_POST['weakness'];
    $strenth=$_POST['strenth'];
    $addition=$_POST['addition'];
    $deletion=$_POST['deletion'];
    $objectives=$_POST['objectives'];





    $sql1="insert into feedback(nameofperson,name,duration,date,venue,faculty,course,faculty_knw,communi_skill,commitment,general_view,weakness,strenth,addition,deletion,met_obj,admin_id)
    values('$name','$name_of_training','$duration','$date','$venue','$faculty','$course','$radio1','$experience','$radio3','$radio4','$weakness','$strenth','$addition','$deletion','$objectives','$id')";
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
            
            <div class="row ">
                <div class="col-md-6 col-md-offset-3 form-container">
                    <h2>Training Feedback Form - Trainee </h2><h4 align="center">VSPL/FM/25, V1.0</h4>
                    <p><h4> Please provide your feedback below: </h4></p>
                    <form  method="post" > 

                                     <div class="form-group">
    <label for="inputdefault">Name of the person</label>
   
    <select name="name" class="form-control"> 

<?php

$sql = "SELECT name From team";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
echo "<option value='". $row['name'] ."'>" .$row['name'] ."</option>" ;
}
?>
</select>
  </div>
  <div class="form-group">
    <label >Name of the training</label>
    <input class="form-control"   name="name_of_training" value="<?php echo $data_fetch['name']?>" readonly>

  </div>



                         

  
 <div class="row">
            <div class="form-group col-xs-6">
                <label for="inputdefault">Duration</label>
                <input id="duration" class="form-control input-group-lg reg_name" type="text" name="duration" value="<?php echo $data_fetch['duration'] ?>" readonly>
                        
            </div>

            <div class="form-group col-xs-6">
                <label for="inputdefault">Date</label>
                <input id="duration" class="form-control input-group-lg reg_name" type="text" name="date" value="<?php echo $data_fetch['date'] ?>" readonly>
            </div>
        </div>
                    	          <div class="form-group">
    <label for="inputdefault">Venue</label>
    <input class="form-control" id="inputdefault" type="text" name="venue" value="<?php echo $data_fetch['venue'] ?>" readonly>

  </div>
                                   <div class="form-group">
    <label for="inputdefault">Faculty/Faculties</label>
    <input class="form-control" id="inputdefault" type="text" name="faculty" value="<?php echo $data_fetch['faculty'] ?>" readonly>
  </div>
                                   <div class="form-group">
    <label for="inputdefault">Course objective</label>
    <input class="form-control" id="inputdefault" type="text" name="course" value="<?php echo $data_fetch['course'] ?>" readonly>
  </div>
                                  




                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label><h4>How do you rate your overall experience?</h4></label>
                                <br>
                                <label>Faculty's knowledge of the topic?</label>

                                <p>

                                    <label class="radio-inline">
                                        <input type="radio" name="radio1"  value="Excellent" required="required" >
                                        Excellent 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio1"  value="Very Good" >
                                        Very Good 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio1"  value="Good" >
                                        Good 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio1"  value="Fair" >
                                        Fair 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio1"  value="Poor" >
                                        Poor 
                                    </label>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group">
                                
                                <label>Communication skill of the faculty?</label>

                                <p>

                                    <label class="radio-inline">
                                        <input type="radio" name="experience"  value="Excellent" required="required" >
                                        Excellent 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience"  value="Very Good" >
                                        Very Good 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience"  value="Good" >
                                        Good 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience"  value="Fair" >
                                        Fair 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience"  value="Poor" >
                                        Poor 
                                    </label>
                                </p>
                            </div>
                        </div>
                       <div class="row">
                            <div class="col-sm-12 form-group">
                                
                                <label><div class="row">
                            <div class="col-sm-12 form-group">
                                
                                <label>Commitment of the faculty?</label>

                                <p>

                                    <label class="radio-inline">
                                        <input type="radio" name="radio3"  value="Excellent" required="required" >
                                        Excellent 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio3"  value="Very Good" >
                                        Very Good 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio3"  value="Good" >
                                        Good 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio3"  value="Fair" >
                                        Fair 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio3"  value="Poor" >
                                        Poor 
                                    </label>
                                </p>
                            </div>
                        </div><div class="row">
                            <div class="col-sm-12 form-group">
                                
                                <label>General view of the training</label>

                                <p>

                                    <label class="radio-inline">
                                        <input type="radio" name="radio4"  value="Excellent" required="required" >
                                        Excellent 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio4"  value="Very Good" >
                                        Very Good 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio4"  value="Good" >
                                        Good 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio4"  value="Fair" >
                                        Fair 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio4"  value="Poor" >
                                        Poor 
                                    </label>
                                </p>
                            </div>
                        </div>





                        <div class="form-group">
      <label for="comment">Specify the weakness of the course (Faculty/quality of training material/ timeliness of the program/ arrangements), if any:</label>
      <textarea class="form-control" rows="5" id="comment" name="weakness" minlength="2" maxlength="100" ></textarea>
    </div>

    <div class="form-group">
      <label for="comment">Specify the strength of the course (Faculty/ quality of training material/ timeliness of the program/ arrangements), if any:</label>
      <textarea class="form-control" rows="5" id="comment" name="strenth" minlength="2" maxlength="100"></textarea>
    </div>
    <div class="form-group">
      <label for="comment">If any addition is required in the current topics to increase the value of the course:</label>
      <textarea class="form-control" rows="5" id="comment" name="addition" minlength="2" maxlength="100"></textarea>
    </div>


    <div class="form-group">
      <label for="comment">If any deletion is required in the current topics to increase the value of the course:</label>
      <textarea class="form-control" rows="5" id="comment" name="deletion" minlength="2" maxlength="100"></textarea>
    </div>
    <div class="form-group">
      <label for="comment">How well has the course met the objectives?</label>
      <textarea class="form-control" rows="5" id="comment" name="objectives" minlength="2" maxlength="100"></textarea>
    </div>
                        
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-warning btn-block" id="payBtn" name="sub" >Submit </button>



                            </div>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>