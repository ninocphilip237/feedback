<?php
// error_reporting(0);
session_start();
include "includes/connect.php";
if (isset($_POST['submit'])) {
    $username = ($_POST['username']);
    $password = ($_POST['password']);

    $form_data = array(
        'grant_type' => 'password',
        'username' => $username,
        'password' => $password,
    );
    // echo "<pre>";
    // print_r($form_data);
    $str = http_build_query($form_data);
    $ch = curl_init();
    //curl_setopt($ch, CURLOPT_URL, "http://122.166.23.155/VofoxOneAPI/token"); public
    curl_setopt($ch, CURLOPT_URL, API_URL."token");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $str);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);

// var_dump($output);

    $json = "$output";
    $toke = json_decode($json);
    // print_r($toke); exit();
    if(isset($toke->access_token))
    $_SESSION['token'] = "$toke->access_token";
    // echo $_SESSION['token'];

    // if (isset($_SESSION['token']))
    if (isset($_SESSION['token']) && !empty($_SESSION['token'])) {
      $access_token = $_SESSION['token'];
      $request_headers = array();

      $request_headers[] = 'Authorization: Bearer ' . $access_token;

      $handle1 = curl_init();
      $api_url = API_URL.'api/Account/UserInfo';

      curl_setopt_array(
          $handle1,
          array(
              CURLOPT_URL => $api_url,
              CURLOPT_POST => false,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_HTTPHEADER => $request_headers,
              CURLOPT_SSL_VERIFYPEER => false,
              CURLOPT_HEADER => false,
              CURLOPT_TIMEOUT => -1,
          )
      );

      $data = curl_exec($handle1);
      curl_close($handle1);
      $_SESSION['token_user'] = $data;
      $user_data = json_decode($_SESSION['token_user']);
      if($user_data->Email=='hr@vofoxsolutions.com'){
        $_SESSION['user_type'] = 'admin';
        header("location:dashboard.php");
      }
      else{
        $_SESSION['user_type'] = 'user';
        header("location:user_dashboard.php");
      }
        
    } else {
       
        echo "<script type=text/javascript>";
        echo "alert('Invalid login details entered');";
        echo "document.location.href='index.php'";
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
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>FeedBack</h1>
                  </div>

                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="post"  class="form-validate mb-4">
                    <div class="form-group">
                      <input id="login-email" type="email" name="username"  class="input-material" placeholder="Email" required>
                      <!-- <label for="login-email" class="label-material">Email</label> -->
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password"  class="input-material" placeholder="Password" required>
                      <!-- <label for="login-password" class="label-material">Password</label> -->
                    </div>
                    <!-- <div class="col-sm-8">
                   <small id="passwordHelp" class="text-danger">
                         Invalid Email or password!

                           </small>
                            </div> -->
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                  </form>

                  <!-- <a href="forms_html" class="forgot-pass">Forgot Password?</a>
                  <br><small>Do not have an account? </small><a href="register.html" class="signup">Signup</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
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
  </body>
</html>
