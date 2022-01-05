<?php
session_start();
$user_data = json_decode($_SESSION['token_user']);
$feedback_id=$_GET['feedback_id'];
$form_id=$_GET['form_id'];
include "includes/connect.php";
$type='';
$queryx ="SELECT * FROM add_details WHERE id='$form_id'";
$resultsx = mysqli_query($conn, $queryx);
foreach($resultsx as $t) {
    $type = $t['fac_type'];
}

if($type=='internal'){
  $sqlz = "SELECT * from attendance where user_id='".$user_data->EmployeeId."' and admin_id='".$form_id."'";
  $exez = mysqli_query($conn, $sqlz);
  if($exez->num_rows > 0){
  }
  else
  {
    $querym ="DELETE FROM feedback WHERE user_id='".$user_data->EmployeeId."' and admin_id='".$form_id."'";
    if(mysqli_query($conn, $querym)){
    echo "<script type=text/javascript>";
    echo "alert('You have no attendance for this training, No need to submit this form ! You will be automatically removed from the trainee list !');";
    echo "document.location.href='tables_user.php'";
    echo"</script>";
    }

  }
}

if(isset($_POST['submit']))
{
    $date=$_POST['date'];
    $duration=$_POST['duration'];
    $radio1=$_POST['option1'];
    $experience=$_POST['option2'];
    $radio3=$_POST['option3'];
    $radio4=$_POST['option4'];
    $weakness=$_POST['weakness'];
    $strenth=$_POST['strenth'];
    $addition=$_POST['addition'];
    $deletion=$_POST['deletion'];
    $objectives=$_POST['objectives'];
    $sql1="UPDATE feedback SET `f_date`='$date',`f_duration`='$duration',`faculty_knw`='$radio1',`communi_skill`='$experience',`commitment`='$radio3',`general_view`='$radio4',`weakness`='$weakness',`strenth`='$strenth',`addition`='$addition',`deletion`='$deletion',`met_obj`='$objectives' WHERE id='$feedback_id'";
    $exe=mysqli_query($conn,$sql1);
    echo "<script type=text/javascript>";
    echo "alert('Form Response submitted Successfully !');";
    echo "document.location.href='tables_user.php'";
    echo"</script>";
}
?>
<!DOCTYPE html>
<html>

  <head>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Feedback</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">User</strong><strong></strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary"></strong><strong>USER</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">


            <!-- Tasks-->

            <!-- Tasks end-->
            <!-- Megamenu-->

            <!-- Megamenu end     -->
            <!-- Languages dropdown    -->

            <!-- Log out               -->
            <div class="list-inline-item logout">
              <a id="logout" href="logout.php" class="nav-link"> <span class="d-none d-sm-inline">Logout </span><i class="icon-logout"></i></a></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5"><?php echo $user_data->Name ?></h1>
            <p><?php echo $user_data->Designation; ?></p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li ><a href="user_dashboard.php"> <i class="icon-home"></i>Home </a></li>
          <li ><a href="tables_user.php"> <i class="icon-grid"></i>Trainee Feedback</a></li>
          <li ><a href="trainers_user.php"> <i class="icon-grid"></i>Trainer Feedback</a></li>
          <li ><a href="effectiveness_user.php"> <i class="icon-chart"></i>Effectiveness Feedback</a></li>
          <li ><a href="my_trainings.php"> <i class="icon-user"></i>My Trainings</a></li>
        </ul>



      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Training Feedback Form - Trainee
              VSPL/FM/25, V1.0</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="tables_user.php">Back to Trainee Feedbacks</a></li>
            
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              
              
              
              <!-- Modal Form-->
              
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Please provide your feedback below:</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal" method="post">
                    <?php
                          $sql1 = "SELECT * From add_details where id='".$form_id."'";
                          $exe1=mysqli_query($conn,$sql1);
                          while($row=mysqli_fetch_array($exe1)) {
                    ?>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Name of the person</label>
                        <div class="col-sm-9">
                        <input type="text" name="name" <?php echo " value='".$user_data->Name."'" ; ?> class="form-control" readonly> 
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Name of the Training</label>
                        <div class="col-sm-9">
                        <input type="text" name="names" class="form-control" value="<?php echo $row['name']?>" readonly>
                        </div>
                      </div>
                      
                    
                          <?php
                           $sql3 = "SELECT * from attendance where user_id='".$user_data->EmployeeId."' and admin_id='".$form_id."'";
                           $exe3 = mysqli_query($conn, $sql3);
                           if($exe3->num_rows > 0){
                             $t_date = '';
                             $t_duration = 0;
                             while ($att = mysqli_fetch_array($exe3)) {
                               if($t_date==''){
                                $t_date= $t_date.$att['date'];
                               }
                               else
                               {
                                $t_date= $t_date.','.$att['date'];
                               }
                          
                               $t_duration= $t_duration+$att['duration'];
                               
                             }
                          ?>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Date</label>
                        <div class="col-sm-9">
                          <input type="text" name="date" class="form-control" value="<?php echo $t_date; ?>" readonly >
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Duration</label>
                        <div class="col-sm-9">
                          <input type="text" name="duration" class="form-control" value="<?php echo $t_duration; ?> Hrs" readonly >
                        </div>
                      </div>
                         <?php } else { ?>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Date</label>
                        <div class="col-sm-9">
                          <input type="text" name="date" class="form-control date"  autocomplete="off" value="<?php echo $row['date']?>" >
                          </div>
                       </div> 
                       <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Duration</label>
                        <div class="col-sm-9">
                          <input type="text" name="duration" class="form-control" value="<?php echo $row['duration']?>" >
                        </div>
                      </div> 
                          
                     <?php } ?>
  
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Venue</label>
                        <div class="col-sm-9">
                          <input type="text"  class="form-control" name="venue" value="<?php echo $row['venue']?>" readonly>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Faculty/Faculties</label>
                        <div class="col-sm-9">
                          <input type="text" name="faculty"  class="form-control" value="<?php 
                               if($row['fac_type']=='external'){
                                  echo $row['faculty'];
                               }
                               {
                                $fac = '';
                                $sqlx = "SELECT * From faculty where admin_id='".$row['id']."'";
                                $exex=mysqli_query($conn,$sqlx);
                                while ($c = mysqli_fetch_array($exex)) {
                                 $fac.=$c['faculty']." , ";
                                   
                                }
                                echo rtrim($fac, ' , ');

                               } 
                            ?>" readonly>
                        </div>
                      </div>             
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Course Objective</label>
                        <div class="col-sm-9">
                          <input type="text" name="course"  class="form-control" value="<?php echo $row['course']?>" readonly>
                        </div>
                      </div>

                      <?php } ?> 
                  
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Faculty's knowledge of the topic?</label>
                        <div class="col-sm-9">
                          
                          <div class="i-checks">
                            <input type="radio"  value="Excellent" class="radio-template" name="option1" id="option1" required="required">
                            <label for="radioCustom1">Excellent</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="Very Good" class="radio-template" name="option1" id="option1">
                            <label for="radioCustom1">Very Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="Good" class="radio-template" name="option1" id="option1">
                            <label for="radioCustom1">Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="Fair" class="radio-template" name="option1" id="option1">
                            <label for="radioCustom1">Fair</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="Poor" class="radio-template" name="option1" id="option1">
                            <label for="radioCustom1">Poor</label>
                          </div>
                          
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Communication skill of the faculty?</label>
                        <div class="col-sm-9">
                          
                          <div class="i-checks">
                            <input type="radio"  value="Excellent" class="radio-template" name="option2" id="option2" required="required">
                            <label for="radioCustom1">Excellent</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="Very Good" class="radio-template" name="option2" id="option2">
                            <label for="radioCustom1">Very Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="Good" class="radio-template" name="option2" id="option2">
                            <label for="radioCustom1">Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="Fair" class="radio-template" name="option2" id="option2">
                            <label for="radioCustom1">Fair</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="Poor" class="radio-template" name="option2" id="option2">
                            <label for="radioCustom1">Poor</label>
                          </div>
                          
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Commitment of the faculty? </label>
                        <div class="col-sm-9">
                          
                          <div class="i-checks">
                            <input type="radio"  value="Excellent" class="radio-template" name="option3" id="option3" required="required">
                            <label for="radioCustom1">Excellent</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="Very Good" class="radio-template" name="option3" id="option3">
                            <label for="radioCustom1">Very Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="Good" class="radio-template" name="option3" id="option3">
                            <label for="radioCustom1">Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="Fair" class="radio-template" name="option3" id="option3">
                            <label for="radioCustom2">Fair</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="Poor" class="radio-template" name="option3" id="option3">
                            <label for="radioCustom2">Poor</label>
                          </div>
                          
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">General view of the training</label>
                        <div class="col-sm-9">
                          
                          <div class="i-checks">
                            <input type="radio"  value="Excellent" class="radio-template" name="option4" id="option4" required="required">
                            <label for="radioCustom1">Excellent</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="Very Good" class="radio-template" name="option4" id="option4">
                            <label for="radioCustom1">Very Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="Good" class="radio-template" name="option4" id="option4">
                            <label for="radioCustom1">Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="Fair" class="radio-template" name="option4" id="option4">
                            <label for="radioCustom2">Fair</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="Poor" class="radio-template" name="option4" id="option4">
                            <label for="radioCustom2">Poor</label>
                          </div>
                          
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Specify the weakness of the course (Faculty/quality of training material/ timeliness of the program/ arrangements), if any:</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" rows="5" id="comment" name="weakness" minlength="2" maxlength="100" ></textarea>
                        </div>
                      </div>


                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Specify the strength of the course (Faculty/ quality of training material/ timeliness of the program/ arrangements), if any:</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" rows="5" id="comment" name="strenth" minlength="2" maxlength="100" ></textarea>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">If any addition is required in the current topics to increase the value of the course:</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" rows="5" id="comment" name="addition" minlength="2" maxlength="100" ></textarea>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">If any deletion is required in the current topics to increase the value of the course:</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" rows="5" id="comment" name="deletion" minlength="2" maxlength="100" ></textarea>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">How well has the course met the objectives?</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" rows="5" id="comment" name="objectives" minlength="2" maxlength="100" ></textarea>
                        </div>
                      </div>
                      
                     
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <a href="tables_user.php" class="btn btn-secondary">Cancel</a>
                          <button type="submit" name="submit" class="btn btn-primary">Submit Response</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script>
      $(document).ready(function() {
          
          $('.date').datepicker({
            multidate: true,
            format: 'dd-mm-yyyy'
          });
      });
    </script>
  </body>
</html>