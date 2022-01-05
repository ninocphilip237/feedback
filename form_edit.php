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

$sqlt="select fac_id from faculty where admin_id='$form_id'";
$resultt=mysqli_query($conn,$sqlt);
while($rowt = $resultt->fetch_assoc())
{
    $selected_facs[] = $rowt['fac_id'];
}

if(isset($_POST['submit']))
{
    // print_r($_POST);exit;
    $name_of_train=$_POST['name_of_training'];
    $duration=$_POST['duration'];
    $date=$_POST['date'];
    $venue=$_POST['venue'];
    $faculty=$_POST['faculty'];
    $course=$_POST['course'];
    $edit_attendees = false;
    if(isset($_POST['edit_attendees']))
    $edit_attendees =  $_POST['edit_attendees'];
    $fac_type=$_POST['fac_type'];
    if($fac_type=='internal'){
      $fac_data = $_POST['fac'];
      $fac_id=null;
      $faculty=null;
    $sql1="update add_details set name='$name_of_train',duration='$duration',date='$date',venue='$venue',fac_type='$fac_type',faculty='$faculty',fac_id='$fac_id',course='$course' where id=$form_id";
    }
    if($fac_type=='external'){  
      $status=1;
      $fac_id=null; 
      $sql1="update add_details set name='$name_of_train',duration='$duration',date='$date',venue='$venue',fac_type='$fac_type',faculty='$faculty',fac_id='$fac_id',course='$course',status=$status where id=$form_id";
    }
    $exe=mysqli_query($conn,$sql1);
    // echo mysqli_error($conn);
    if($exe){
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
    if($fac_type=='internal'){
      $sqld="delete from faculty where admin_id='$form_id'";
      $exed=mysqli_query($conn,$sqld);
      foreach($fac_data as $f){
        $tr_data = explode('|', $f);
        $sql3="INSERT INTO `faculty`(`fac_id`, `faculty`, `admin_id`) VALUES ('$tr_data[0]','$tr_data[1]','$form_id')";
        $exe2=mysqli_query($conn,$sql3);

      }
    
    }
    echo "<script type=text/javascript>";
    echo "alert('Form Edited Successfully !');";
    echo "document.location.href='tables.php'";
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
                  <div class="title"><strong>Training Feedback Form-Trainee</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal" method="post">
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Name of the Training</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="name_of_training" value="<?php echo $edit_fetch_data['name'] ?>" required>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Duration</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="duration" value="<?php echo $edit_fetch_data['duration'] ?>" required>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Date</label>
                        <div class="col-sm-9">
                          <input id="date" class="form-control date input-group-lg reg_name" type="text" name="date"  autocomplete="off" value="<?php echo $edit_fetch_data['date'] ?>" required
                          />
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Venue</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="venue" value="<?php echo $edit_fetch_data['venue'] ?>" required >
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Type of Faculty</label>
                        <div class="col-sm-9">
                           <div class="i-checks">
                            <input type="radio" <?php if($edit_fetch_data['fac_type']=='internal') echo 'checked'; ?> id="int_radio" value="internal" name="fac_type" required class="radio-template">
                            <label>Internal</label>
                           </div>
                           <div class="i-checks">
                            <input type="radio" <?php if($edit_fetch_data['fac_type']=='external') echo 'checked'; ?> id="ext_radio" value="external" name="fac_type" required class="radio-template">
                            <label> External</label>
                           </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Course objective</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="course" value="<?php echo $edit_fetch_data['course'] ?>" required >
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row" id="facname_div">
                        <label class="col-sm-3 form-control-label">Faculty/Faculties</label>
                        <div class="col-sm-9">
                          <input type="text" id="faculty_text" class="form-control" name="faculty" value="<?php echo $edit_fetch_data['faculty'] ?>" >
                        </div>
                      </div>
                      
                      <div class="line"></div>
                      <div class="form-group row" id="fac_div">
                        <label class="col-sm-3 form-control-label">Faculty</label>
                        <div class="col-sm-9">
                        <select class="js-example-basic-multiple form-control" id="e2" required name="fac[]" style="min-height:40px;"  multiple="multiple" >
                          <?php
                            // $sql = "SELECT name From team";
                            // $result = $conn->query($sql);
                            foreach($users as $user){
                        
                            if (in_array($user->Id, $selected_facs)){
                                echo "<option value='". $user->Id ."|".$user->Text."' selected >" .$user->Text ."</option>" ;
                              }
                              else
                              {
                             ?>
                              <option value="<?php echo $user->Id .'|'.$user->Text; ?>"  > <?php echo $user->Text;  ?></option>
                           <?php
                              }
                            }
                          ?>
                        </select>
                        </div>
                      </div>
                  
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Attendees  <span  id="att-count"></span> </label>
                        <div class="col-sm-9">
                        <label data-toggle="collapse"  data-target="#collapseOne">
                             <input type="checkbox" id="edit_attendees" name="edit_attendees" >&nbsp; Edit Attendees  </label>
                              </br><em>* Editing attendees will clear all the  responses for this form </em>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div id="collapseOne" class="form-group row collapse">
                        <label class="col-sm-3 form-control-label"></label>
                        <div class="col-sm-9">
                        <select class="js-example-basic-multiple form-control" id="e1" name="attendees[]" style="min-height:40px;width:100%;"  multiple="multiple" >
                          <?php
                            foreach($users as $user){
                              if (in_array($user->Id, $selected_ids)){
                                echo "<option value='". $user->Id ."|".$user->Text."' selected >" .$user->Text ."</option>" ;
                              }
                              else
                              {
                              echo "<option value='". $user->Id ."|".$user->Text."'>" .$user->Text ."</option>" ;
                              }
                            }
                          ?>
                        </select>
                        <input type="checkbox" id="checkbox" >&nbsp; Select All
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                        <a class="btn btn-secondary" href="tables.php">
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
          $('#e2').select2(); 
          $("#fac_div").hide();    
          $("#facname_div").hide();
          $('select').change();
          $('.date').datepicker({
            multidate: true,
            format: 'dd-mm-yyyy'
          });
      });
      $("#ext_radio").click(function(){
        // debugger
            $("#fac_div").hide();
            $("#facname_div").show();
       });
      $("#int_radio").click(function(){
            $("#fac_div").show();
            $("#facname_div").hide();
      });
      $("#checkbox").click(function(){
          if($("#checkbox").is(':checked') ){
              $("#e1 > option").prop("selected","selected");
              $('#e1').prop('required', true);
              $("#e1").trigger("change");
          }else{
              $('#e1').val('');
              $('#e1').prop('required', false);
              $("#e1").trigger("change");
          }
      });
      $('.radio-template').change(function () {
          if($('#int_radio').is(':checked')) {
              $('#e2').prop('required', true);
          } else {
              $('#e2').prop('required', false);
          }
          if($('#ext_radio').is(':checked')) {
              $('#faculty_text').prop('required', true);
          } else {
              $('#faculty_text').prop('required', false);
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
      
      $('#e2').on('select2:select', function (evt) {
        $("#e1 option[value='"+evt.params.data.id+"'").remove(); 
      });
      $('#e2').on('select2:unselect', function (evt) {
        var newOption = new Option(evt.params.data.text, evt.params.data.id, false, false);
        $('#e1').append(newOption).trigger('change');
      });
      $('#e1').on('select2:select', function (evt) {
        $("#e2 option[value='"+evt.params.data.id+"'").remove(); 
      });
      $('#e1').on('select2:unselect', function (evt) {
        var newOption = new Option(evt.params.data.text, evt.params.data.id, false, false);
        $('#e2').append(newOption).trigger('change');
      });
    </script>
  </body>
</html>