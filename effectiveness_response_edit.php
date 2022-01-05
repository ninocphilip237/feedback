<?php
session_start();
include "includes/connect.php";
// if(!isset($_SESSION['log']))
// header("location:login.php");
if(isset($_SESSION['user_type'])){
  if($_SESSION['user_type'] != 'admin'){
    echo "<script type=text/javascript>";
    echo "alert('You are not authorized to access this page !');";
    echo "document.location.href='index.php'";
    echo"</script>";
    exit();
  }
}
else{
    echo "<script type=text/javascript>";
    echo "alert('You are not authorized to access this page !');";
    echo "document.location.href='login.php'";
    echo"</script>";
    exit();
}
// $handle1 = curl_init();
// $api_url = API_URL.'api/Employees/EmployeeNames';

// curl_setopt_array(
//     $handle1,
//     array(
//         CURLOPT_URL => $api_url,
//         CURLOPT_POST => false,
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_SSL_VERIFYPEER => false,
//         CURLOPT_HEADER => false,
//         CURLOPT_TIMEOUT => -1,
//     )
// );

// $data = curl_exec($handle1);
// curl_close($handle1);
// $users = json_decode($data);


if(isset($_SESSION['token_user']))
$user_data = json_decode($_SESSION['token_user']);
$form_id = $fid = '';
$form_id=$_GET['edit_id'];
$fid=$_GET['fid'];
$sql="select  * from feedback_effectiveness where id='$form_id'";
 $exe3=mysqli_query($conn,$sql);
 $edit_fetch_data=mysqli_fetch_array($exe3);


if(isset($_POST['submit']))
{
    // print_r($_POST);exit;
    $duration=$_POST['duration'];
    $date=$_POST['date'];     
    $sql1="update feedback_effectiveness set f_duration='$duration',f_date='$date' where id=$form_id";
  
    $exe=mysqli_query($conn,$sql1);
    // echo mysqli_error($conn);
    if($exe){
      echo "<script type=text/javascript>";
      echo "alert('Edited Successfully !');";
      echo "document.location.href='effectiveness_edit.php?feedback_id=".$fid."'";
      echo"</script>";
   }
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
                <strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">ADMIN</strong></div></a>
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
          <li ><a href="dashboard.php"> <i class="icon-home"></i>Home </a></li>
          <li ><a href="tables.php"> <i class="icon-grid"></i>Trainee Feedback</a></li>
          <li ><a href="trainers.php"> <i class="icon-grid"></i>Trainer Feedback</a></li>
         <li ><a href="effectiveness.php"> <i class="icon-chart"></i>Effectiveness Feedback</a></li>
         <li ><a href="my_trainings.php"> <i class="icon-user"></i>My Trainings</a></li>
          <li ><a href="forms.php"> <i class="icon-padnote"></i>New Training Form </a></li>
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
            <li class="breadcrumb-item"><a href="tables.php">Back to Forms</a></li>
            
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
                  <div class="title"><strong>Effectiveness Feedback Response</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal" method="post">
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Duration</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="duration" value="<?php echo $edit_fetch_data['f_duration'] ?>" required>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Date</label>
                        <div class="col-sm-9">
                          <input id="date" class="form-control date input-group-lg reg_name" type="text" name="date"  autocomplete="off" value="<?php echo $edit_fetch_data['f_date'] ?>" required
                          />
                        </div>
                      </div>
                      <div class="line"></div>
                    
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                        <a class="btn btn-secondary" href="effectiveness_edit.php?feedback_id=<?php echo $fid; ?>">
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
          $('.date').datepicker({
            multidate: true,
            format: 'dd-mm-yyyy'
          });
      });
 
    </script>
  </body>
</html>