<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
.lol { 
  
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
</head>

<body class="lol">

<div class="sidebar">
  
  <a  href="admin_adddetails.php">Training session</a>
  <a href="print_list.php">Forms</a>
  <a href="logout.php">Logout</a>
</div>

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
