<?php
session_start();
include "includes/connect.php";
// if(!isset($_SESSION['log']))
// header("location:login.php");
if(isset($_SESSION['user_type'])){
  // if($_SESSION['user_type'] != 'user'){
  //   echo "<script type=text/javascript>";
  //   echo "alert('You are not authorized to access this page !');";
  //   echo "document.location.href='index.php'";
  //   echo"</script>";
  //   exit();
  // }
}
else{
    echo "<script type=text/javascript>";
    echo "alert('You are not authorized to access this page !');";
    echo "document.location.href='login.php'";
    echo"</script>";
    exit();
}
$handle1 = curl_init();
$api_url = API_URL.'api/Employees/EmployeeNames';

curl_setopt_array(
    $handle1,
    array(
        CURLOPT_URL => $api_url,
        CURLOPT_POST => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HEADER => false,
        CURLOPT_TIMEOUT => -1,
    )
);

$data = curl_exec($handle1);
curl_close($handle1);
$users = json_decode($data);


if(isset($_SESSION['token_user']))
$user_data = json_decode($_SESSION['token_user']);

$form_id=$_GET['edit_id'];
$sql="select  * from add_details where id='$form_id'";
 $exe3=mysqli_query($conn,$sql);
 $edit_fetch_data=mysqli_fetch_array($exe3);
$sql1="select user_id from feedback where admin_id='$form_id'";
$result=mysqli_query($conn,$sql1);
while($row = $result->fetch_assoc())
{
    $selected_ids[] = $row['user_id'];
}

if(isset($_POST['submit']))
{
    // print_r($_POST);exit;
    $name_of_train=$_POST['name_of_training'];
    $duration=$_POST['duration'];
    $date=$_POST['date'];
    $venue=$_POST['venue'];
    $course=$_POST['course'];
    $edit_attendees = false;
    if(isset($_POST['edit_attendees']))
    $edit_attendees =  $_POST['edit_attendees'];

    // $now  = new DateTime();
    // $t_date = new DateTime($date);
    // if ($t_date >= $now)
    // {

    //     echo "<script type=text/javascript>";
    //     echo "alert('Training date is not in the past !');";
    //     echo "document.location.href='my_trainings.php'";
    //     echo"</script>";  
    //     exit();
    // }

    $sql1="update add_details set name='$name_of_train',duration='$duration',date='$date',venue='$venue',course='$course' where id=$form_id";
    $exe=mysqli_query($conn,$sql1);
    // echo mysqli_error($conn);
    if($edit_attendees){
      $sql2="delete from feedback where admin_id='$form_id'";
      $exe1=mysqli_query($conn,$sql2);
      $sql4="delete from feedback_effectiveness where admin_id='$form_id'";
      $exe4=mysqli_query($conn,$sql4);
      $attendees = $_POST['attendees']; 
     foreach($attendees as $att){
      $att_data = explode('|', $att);
       $sql3="insert into feedback(user_id,user_name,admin_id) values('$att_data[0]','$att_data[1]','$form_id')";
       $exe2=mysqli_query($conn,$sql3);
      }
    }
    echo "<script type=text/javascript>";
    echo "alert('Form Edited Successfully !');";
    echo "document.location.href='my_trainings.php'";
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
    <style>
      .select2 .selection{
       width: 100%;
      }
    </style>
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
              <div class="brand-text brand-big visible text-uppercase">
                <!-- <strong class="text-primary">Dark</strong> -->
                <strong>User</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">User</strong></div></a>
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
            <div class="list-inline-item logout">                   <a id="logout" href="logout.php" class="nav-link"> <span class="d-none d-sm-inline">Logout </span><i class="icon-logout"></i></a></div>
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
            <h2 class="h5 no-margin-bottom">Edit Form</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="my_trainings.php">Back to My Trainings</a></li>
            
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <!-- Basic Form-->
             
              <!-- Horizontal Form-->
              
              <!-- Inline Form-->
              
              <!-- Modal Form-->
              
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Training Feedback Form Edit-Trainer</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal" method="post">
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Name of the Training</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="name_of_training" value="<?php echo $edit_fetch_data['name'] ?>">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Duration</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="duration" value="<?php echo $edit_fetch_data['duration'] ?>">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Date</label>
                        <div class="col-sm-9">
                          <input id="date" class="form-control date input-group-lg reg_name"  autocomplete="off" type="text" name="date" required value="<?php echo $edit_fetch_data['date'] ?>" 
                          />
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Venue</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="venue" value="<?php echo $edit_fetch_data['venue'] ?>">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Course objective</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="course" value="<?php echo $edit_fetch_data['course'] ?>">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Attendees   <span  id="att-count"></span> </label>
                        <div class="col-sm-9">
                        <label data-toggle="collapse"  data-target="#collapseOne">
                             <input type="checkbox" id="edit_attendees" name="edit_attendees" >&nbsp; Edit Attendees </label>
                              </br><em>* Editing attendees will clear all the  responses for this form </em>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div id="collapseOne" class="form-group row collapse">
                        <label class="col-sm-3 form-control-label"></label>
                        <div class="col-sm-9">
                        <select class="js-example-basic-multiple form-control" id="e1" name="attendees[]" multiple="multiple">
                          <?php
                            foreach($users as $user){
                             if($edit_fetch_data['fac_id']!=$user->Id){
                              if (in_array($user->Id, $selected_ids)){
                                echo "<option value='". $user->Id ."|".$user->Text."' selected >" .$user->Text ."</option>" ;
                              }
                              else
                              {
                              echo "<option value='". $user->Id ."|".$user->Text."'>" .$user->Text ."</option>" ;
                              }
                             }
                            }
                          ?>
                        </select>
                        <input type="checkbox" id="checkbox" >&nbsp; Select All
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                        <a class="btn btn-secondary" href="my_trainings.php">
                          Cancel</a>
                          <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <footer class="">
          <div class="">
            
          </div>
        </footer>
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
          $('#e1').select2();
          $('select').change();
          $('.date').datepicker({
            multidate: true,
            format: 'dd-mm-yyyy'
          });
      });
      // $(function(){
      //     var dtToday = new Date();

      //     var month = dtToday.getMonth() + 1;
      //     var day = dtToday.getDate();
      //     var year = dtToday.getFullYear();

      //     if(month < 10)
      //         month = '0' + month.toString();
      //     if(day < 10)
      //         day = '0' + day.toString();

      //     var maxDate = year + '-' + month + '-' + day;    
      //     $('#date').attr('max', maxDate);
      // });
      // var dateControler = {
      //           currentDate : null
      //       }

      // $(document).on( "change", "#date",function( event, ui ) {
      //       var now = new Date();
      //       var selectedDate = new Date($(this).val());

      //       if(selectedDate > now) {
      //           $(this).val(dateControler.currentDate)
      //       } else {
      //           dateControler.currentDate = $(this).val();
      //       }
      //   });  
      $("#checkbox").click(function(){
          if($("#checkbox").is(':checked') ){
              $("#e1 > option").prop("selected","selected");
              $("#e1").trigger("change");
          }else{
              $('#e1').val('');
              $("#e1").trigger("change");
          }
      });
      $('select').on('change', function (evt) {
        // var uldiv = $(this).siblings('span.select2').find('ul')
        var uldiv = $('#att-count');
        var count = $(this).select2('data').length
        if(count==0){
          uldiv.text("( No Attendee Selected )")
        }
        else{
          uldiv.text("( "+count+" Attendee(s) Selected )")
        }
      });
    </script>
  </body>
</html>