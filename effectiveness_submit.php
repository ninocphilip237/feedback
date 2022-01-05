<?php
session_start();
$user_data = json_decode($_SESSION['token_user']);
// $feedback_id=$_GET['feedback_id'];
$form_id=$_GET['feedback_id'];
include "includes/connect.php";
if(isset($_POST['submit']))
{
    $tr_data = explode('|', $_POST['name']);
    $duration=$_POST['duration'];
    $date=$_POST['date'];
    $radio1=$_POST['option1'];
    $radio2=$_POST['option2'];
    $radio3=$_POST['option3'];
    $radio4=$_POST['option4'];
    $radio5=$_POST['option5'];
    $radio6=$_POST['option6'];
    $comments=$_POST['comments'];
    $sql1="INSERT INTO `feedback_effectiveness`(`user_id`, `user_name`, `learning_tp`, `app_learn`, `att_change`, `knw_dev`, `skill_dev`, `overall_rating`, `comments`, `admin_id`, `f_duration`, `f_date`) VALUES ( '$tr_data[0]', '$tr_data[1]','$radio1','$radio2','$radio3','$radio4','$radio5','$radio6','$comments','$form_id','$duration','$date')";
    $exe=mysqli_query($conn,$sql1);
    echo "<script type=text/javascript>";
    echo "alert('Form Response submitted Successfully !');";
    if($_SESSION['user_type'] == 'user'){

      echo "document.location.href='effectiveness_user.php'";

     } 
    if($_SESSION['user_type'] == 'admin'){ 

      echo "document.location.href='effectiveness.php'";

     } 
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
    <!-- select2 css -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
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
        <?php if($_SESSION['user_type'] == 'user'){ ?>  
          <li ><a href="user_dashboard.php"> <i class="icon-home"></i>Home </a></li>
          <li ><a href="tables_user.php"> <i class="icon-grid"></i>Trainee Feedback</a></li>
          <li ><a href="trainers_user.php"> <i class="icon-grid"></i>Trainer Feedback</a></li>
          <li ><a href="effectiveness_user.php"> <i class="icon-chart"></i>Effectiveness Feedback</a></li>
          <li ><a href="my_trainings.php"> <i class="icon-user"></i>My Trainings</a></li>
        <?php } 
        if($_SESSION['user_type'] == 'admin'){ ?>
          <li ><a href="dashboard.php"> <i class="icon-home"></i>Home </a></li>
          <li ><a href="tables.php"> <i class="icon-grid"></i>Trainee Feedback</a></li>
          <li ><a href="trainers.php"> <i class="icon-grid"></i>Trainer Feedback</a></li>
          <li ><a href="effectiveness.php"> <i class="icon-chart"></i>Effectiveness Feedback</a></li>
          <li ><a href="my_trainings.php"> <i class="icon-user"></i>My Trainings</a></li>
          <li ><a href="forms.php"> <i class="icon-padnote"></i>New Training Form </a></li>
          <?php } ?>
        </ul>



      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Training Effectiveness & Evaluation Form - 
              VSPL/FM/72, V1.1</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <?php if($_SESSION['user_type'] == 'user'){ ?>  

              <li class="breadcrumb-item"><a href="effectiveness_user.php">Back to Effectiveness Feedbacks</a></li>

            <?php } 
              if($_SESSION['user_type'] == 'admin'){ ?>

               <li class="breadcrumb-item"><a href="effectiveness.php">Back to Effectiveness Feedbacks</a></li>

            <?php } ?>
            
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
                          <select class="form-control js-example-basic-multiple" id="name" name="name"  >
                          <option value="" selected >Select Trainee</option> 
                            <?php
                              $sql2 = "SELECT feedback.user_id,feedback.user_name,feedback.admin_id From feedback where feedback.admin_id='".$form_id."'";
                              $exe2=mysqli_query($conn,$sql2);
                              while($row2=mysqli_fetch_array($exe2)) {
                                $sqlz = "SELECT * from attendance where user_id='".$row2['user_id']."' and admin_id='".$row2['admin_id']."'";
                                $exez = mysqli_query($conn, $sqlz);
                                if($exez->num_rows > 0){
                                $sql3 = "SELECT * From feedback_effectiveness where admin_id='".$form_id."' AND user_id='".$row2['user_id']."'";
                                $exe3=mysqli_query($conn,$sql3);
                                if (mysqli_num_rows($exe3) == 0){
                            ?>
                            <option value="<?php echo $row2['user_id'].'|'.$row2['user_name']; ?>" ><?php echo $row2['user_name']; ?></option> 
                              <?php } } } ?>
                          </select>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Name of the Training</label>
                        <div class="col-sm-9">
                        <input type="text" name="names" class="form-control" value="<?php echo $row['name']?>" readonly>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Duration</label>
                        <div class="col-sm-9">
                          <input type="text" name="duration" class="form-control" value="<?php echo $row['duration']?>" >
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Date</label>
                        <div class="col-sm-9">
                          <input type="text" name="date" class="form-control date"  autocomplete="off" value="<?php echo $row['date']?>" >
                        </div>
                      </div>
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
                        <label class="col-sm-3 form-control-label">1.	Learning from the Training program</label>
                        <div class="col-sm-9">
                          
                          <div class="i-checks">
                            <input type="radio"  value="5" class="radio-template" name="option1" id="option1" required="required">
                            <label for="radioCustom1">Excellent</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="4" class="radio-template" name="option1" id="option1">
                            <label for="radioCustom1">Very Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="3" class="radio-template" name="option1" id="option1">
                            <label for="radioCustom1">Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="2" class="radio-template" name="option1" id="option1">
                            <label for="radioCustom1">Fair</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="1" class="radio-template" name="option1" id="option1">
                            <label for="radioCustom1">Poor</label>
                          </div>
                          
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">2.	Application of learning</label>
                        <div class="col-sm-9">
                          
                          <div class="i-checks">
                            <input type="radio"  value="5" class="radio-template" name="option2" id="option2" required="required">
                            <label for="radioCustom1">Excellent</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="4" class="radio-template" name="option2" id="option2">
                            <label for="radioCustom1">Very Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="3" class="radio-template" name="option2" id="option2">
                            <label for="radioCustom1">Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="2" class="radio-template" name="option2" id="option2">
                            <label for="radioCustom1">Fair</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="1" class="radio-template" name="option2" id="option2">
                            <label for="radioCustom1">Poor</label>
                          </div>
                          
                        </div>
                      </div>
                      <div class="line"></div>
                      <label style="margin-bottom: 35px;"><h5><b>Change Factor:</b></h5></br>Whether change has taken place with the participant in terms of:</label>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Attitudinal change:  </label>
                        <div class="col-sm-9">
                          
                          <div class="i-checks">
                            <input type="radio"  value="5" class="radio-template" name="option3" id="option3" required="required">
                            <label for="radioCustom1">Excellent</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="4" class="radio-template" name="option3" id="option3">
                            <label for="radioCustom1">Very Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="3" class="radio-template" name="option3" id="option3">
                            <label for="radioCustom1">Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="2" class="radio-template" name="option3" id="option3">
                            <label for="radioCustom2">Fair</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="1" class="radio-template" name="option3" id="option3">
                            <label for="radioCustom2">Poor</label>
                          </div>
                          
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Knowledge Development:  </label>
                        <div class="col-sm-9">
                          
                          <div class="i-checks">
                            <input type="radio"  value="5" class="radio-template" name="option4" id="option4" required="required">
                            <label for="radioCustom1">Excellent</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="4" class="radio-template" name="option4" id="option4">
                            <label for="radioCustom1">Very Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="3" class="radio-template" name="option4" id="option4">
                            <label for="radioCustom1">Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="2" class="radio-template" name="option4" id="option4">
                            <label for="radioCustom2">Fair</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="1" class="radio-template" name="option4" id="option4">
                            <label for="radioCustom2">Poor</label>
                          </div>
                          
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Skill Development:  </label>
                        <div class="col-sm-9">
                          
                          <div class="i-checks">
                            <input type="radio"  value="5" class="radio-template" name="option5" id="option5" required="required">
                            <label for="radioCustom1">Excellent</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="4" class="radio-template" name="option5" id="option5">
                            <label for="radioCustom1">Very Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="3" class="radio-template" name="option5" id="option5">
                            <label for="radioCustom1">Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="2" class="radio-template" name="option5" id="option5">
                            <label for="radioCustom2">Fair</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="1" class="radio-template" name="option5" id="option5">
                            <label for="radioCustom2">Poor</label>
                          </div>
                          
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <h5 class="col-sm-3 form-control-label"><b>Overall Rating: </b></h5>
                        <div class="col-sm-9">
                          
                          <div class="i-checks">
                            <input type="radio"  value="5" class="radio-template" name="option6" id="option6" required="required">
                            <label for="radioCustom1">Excellent</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="4" class="radio-template" name="option6" id="option6">
                            <label for="radioCustom1">Very Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="3" class="radio-template" name="option6" id="option6">
                            <label for="radioCustom1">Good</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="2" class="radio-template" name="option6" id="option6">
                            <label for="radioCustom2">Fair</label>
                          </div>
                          <div class="i-checks">
                            <input type="radio"  value="1" class="radio-template" name="option6" id="option6">
                            <label for="radioCustom2">Poor</label>
                          </div>
                          
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Your Suggestions /Comments for further improvements: </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" rows="5"  name="comments" minlength="2" maxlength="100" ></textarea>
                        </div>
                      </div>
                     
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                        <?php if($_SESSION['user_type'] == 'user'){ ?>  

                          <a href="effectiveness_user.php" class="btn btn-secondary">Cancel</a>

                          <?php } 
                          if($_SESSION['user_type'] == 'admin'){ ?>

                          <a href="effectiveness.php" class="btn btn-secondary">Cancel</a>

                          <?php } ?>
             
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script>
       $(document).ready(function() {
          $('#name').select2();
          $('.date').datepicker({
            multidate: true,
            format: 'dd-mm-yyyy'
          });
      });
    </script>
  </body>
</html>