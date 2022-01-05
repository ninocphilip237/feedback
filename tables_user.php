<?php
session_start();
if(isset($_SESSION['user_type'])){
  if($_SESSION['user_type'] != 'user'){
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
// echo $_SESSION['token_user'];
$user_data = json_decode($_SESSION['token_user']);
// print_r($user_data->EmployeeId);

include "includes/connect.php";
$sql = "SELECT * from feedback where user_id='".$user_data->EmployeeId."'";
$exe = mysqli_query($conn, $sql);
// print_r($exe->num_rows);
?>
<!DOCTYPE html>
<html>
<?php
// $a = $_SESSION['token'];
if (!isset($_SESSION['token'])) {
    header("location:login.php");
}

?>
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
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- JQuery Datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <style>
     label {
        color: #a5a7ab;
      }
      .table  .even {
          background-color: #343a40 !important;
      }
      .paginate_button
      {
        background-color: #a5a7ab;
      }
      .dataTables_info {
        color: #a5a7ab !important;
      }
    </style>
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
        <?php
          $sqlg = "SELECT f.id,a.name,f.admin_id from feedback f INNER JOIN add_details a ON f.admin_id = a.id where f.user_id='".$user_data->EmployeeId."' and f.faculty_knw IS NULL and status=1";
          $exeg = mysqli_query($conn, $sqlg);
          $f_count = 0;  
          while ($y = mysqli_fetch_array($exeg)) { 
            $sqly = "SELECT * from faculty where fac_id='".$user_data->EmployeeId."' and admin_id='".$y['admin_id']."'";
            $exey = mysqli_query($conn, $sqly);
            if($exey->num_rows > 0){  
              $f_count++;                  
            }
          }
         
        ?>
            <!-- Notification-->
            <div class="list-inline-item dropdown">
              <a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i>
                <span class="badge dashbg-1"><?php echo $exeg->num_rows-$f_count; ?></span>
              </a>
              <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages">
                <?php
                  $sql11 = "SELECT f.id,a.name,f.admin_id from feedback f INNER JOIN add_details a ON f.admin_id = a.id where f.user_id='".$user_data->EmployeeId."' and f.faculty_knw IS NULL and status=1";
                  $exe11 = mysqli_query($conn, $sql11);
                  while ($x = mysqli_fetch_array($exe11)) { 
                  $sqli = "SELECT * from faculty where fac_id='".$user_data->EmployeeId."' and admin_id='".$x['admin_id']."'";
                  $exei = mysqli_query($conn, $sqli);
                  if($exei->num_rows > 0){  
                 
                  }
                  else
                  {
                  
                  ?>
                  
                <a href="forms_user.php?feedback_id=<?php echo $x['id'] ?>&form_id=<?php echo $x['admin_id'] ?>" class="dropdown-item message d-flex align-items-center"> 
                  <div class="content">   <strong class="d-block">New Trainee feedback form for training - <?php echo $x['name'] ?> 
 Added.</strong><span class="d-block">Click here to fill it !</span><!--<small class="date d-block">9:30am</small> --> </div>
                </a>
                <?php } } ?>
                  <!-- <a href="#" class="dropdown-item text-center message"> <strong>See All Notifications <i class="fa fa-angle-right"></i></strong></a> -->
              </div>
            </div>
            <!-- Notification end-->
            
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
          <li class="active" ><a href="tables_user.php"> <i class="icon-grid"></i>Trainee Feedback</a></li>
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
            <h2 class="h5 no-margin-bottom">Trainee Feedback</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Trainee Feedback </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">

              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>ORGANIZATION ACTIVITIES</strong></div>
                  <div class="">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Response</th>
                          <th>Name of the training</th>
                          <th>Duration</th>
                          <th>Date</th>
                          <th>Venue</th>
                          <th style="width:110px">Faculty</th>

                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          while ($a = mysqli_fetch_array($exe)) {
                            $sql1 = "SELECT * from add_details where id='".$a['admin_id']."' AND date <= CURDATE() AND status=1";
                            $exe1 = mysqli_query($conn, $sql1);
                            while ($t_data = mysqli_fetch_array($exe1)) {
                            $sqlm = "SELECT * from faculty where fac_id='".$user_data->EmployeeId."' and admin_id='".$t_data['id']."'";
                            $exem = mysqli_query($conn, $sqlm);
                            if($exem->num_rows > 0){
                            }
                            else
                            {
                        ?>
                      
                        <tr>
                          <td> 
                              <?php if( $a['faculty_knw']==null){ ?>
                                <a href="forms_user.php?feedback_id=<?php echo $a['id'] ?>&form_id=<?php echo $a['admin_id'] ?>"> Submit Response </a>
                              <?php } else {  ?>
                                <a href="print_user.php?feedback_id=<?php echo $a['id'] ?>" target="_blank">View Response</a>
                              <?php } ?>
                            
                          </td>
                          <td><?php echo $t_data['name'] ?></td>
                          <td><?php echo $t_data['duration'] ?></td>
                          <td><?php  echo $t_data['date']; ?> </td>
                          <td><?php echo $t_data['venue'] ?></td>
                          <td><?php 
                               if($t_data['fac_type']=='external'){
                                  echo $t_data['faculty'];
                               }
                               else
                               {
                                $fac="";
                                $sqlx = "SELECT * From faculty where admin_id='".$t_data['id']."'";
                                $exex=mysqli_query($conn,$sqlx);
                                while ($c = mysqli_fetch_array($exex)) {
                                  $fac .= $c['faculty']." ,</br>";
                                   
                                }
                               echo rtrim($fac, ' ,</br>');
                               } 
                            ?></td>
                        </tr>

                     
                      <?php
                            }
                          }
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">

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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
       $(document).ready( function () {
         $('.table').DataTable({
        "order": [[ 3, "desc" ]]
         } );
      } );
    </script>
  </body>
</html>