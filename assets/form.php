<?php
$con=mysqli_connect("localhost","root","","form");
if(isset($_POST['sub']))
{
    $a=$_POST['name'];
    $b=$_POST['name_of_training'];
    $c=$_POST['duration'];
    $o=$_POST['dat'];
    $p=$_POST['venue'];
    $d=$_POST['faculty'];
    $e=$_POST['course'];
    $f=$_POST['radio1'];
    $g=$_POST['experience'];
    $h=$_POST['radio3'];
    $i=$_POST['radio4'];
    $j=$_POST['weakness'];
    $k=$_POST['strength'];
    $l=$_POST['addition'];
    $m=$_POST['deletion'];
    $n=$_POST['objectives'];

    $sql="insert into feedback(nameofperson,name,duration,date,venue,faculty,course,faculty_knw,communi_skill,commitment,general_view,weakness,strenth,addition,deletion,met_obj)
    values('$a','$b','$c','$o','$p','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')";
   $sql=mysqli_query($con,$sql);
   

}
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <style type="text/css">
textarea 
{
  resize: none;
}
.bg {
  
  background-image: url("wp37411.jpg");
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
                    <form role="form" method="post"> 

                                     <div class="form-group">
    <label for="inputdefault">Name of the person</label>
    <input class="form-control" id="inputdefault" type="text" name="name">
  </div>
                         <div class="form-group">
    <label for="inputdefault">Name of the training</label>
    <input class="form-control" id="inputdefault" type="text" name="name_of_training">
  </div>

  
<br>
  <div class="row">
  <label for="dteBeginDate" name="duration" class="col-md-2 control-label" style="margin-right: -30px !important;">Duration</label>
  <div class="col-md-4">
    <input type="text">
  </div>

  <label for="" class="col-md-2" name="dat" style="margin-right: -50px !important;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date</label>
  <div class="col-md-4">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" id="dteEndDate" >
  </div>
</div>
                    	          <br><div class="form-group">
    <label for="inputdefault">Venue</label>
    <input class="form-control" id="inputdefault" type="text" name="venue">

  </div>
                                   <div class="form-group">
    <label for="inputdefault">Faculty/Faculties</label>
    <input class="form-control" id="inputdefault" type="text" name="faculty">
  </div>
                                   <div class="form-group">
    <label for="inputdefault">Course objective</label>
    <input class="form-control" id="inputdefault" type="text" name="course">
  </div>
                                  




                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label><h4>How do you rate your overall experience?</h4></label>
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
      <textarea class="form-control" rows="5" id="comment" name="weakness"></textarea>
    </div>

    <div class="form-group">
      <label for="comment">Specify the strength of the course (Faculty/ quality of training material/ timeliness of the program/ arrangements), if any:</label>
      <textarea class="form-control" rows="5" id="comment" name="strength"></textarea>
    </div>
    <div class="form-group">
      <label for="comment">If any addition is required in the current topics to increase the value of the course:</label>
      <textarea class="form-control" rows="5" id="comment" name="addition"></textarea>
    </div>


    <div class="form-group">
      <label for="comment">If any deletion is required in the current topics to increase the value of the course:</label>
      <textarea class="form-control" rows="5" id="comment" name="deletion"></textarea>
    </div>
    <div class="form-group">
      <label for="comment">How well has the course met the objectives?</label>
      <textarea class="form-control" rows="5" id="comment" name="objectives"></textarea>
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