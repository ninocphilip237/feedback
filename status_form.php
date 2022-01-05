<?php
    include "includes/connect.php";
    $status_id=$_GET['id'];
    $status = $_GET['flag'];
    
    // $sql="select  * from add_details where id='$status_id'";
    // $exe3=mysqli_query($conn,$sql);
    // $edit_fetch_data=mysqli_fetch_array($exe3);
    // $date = $edit_fetch_data['date']; 
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
    $sql1 ="SELECT * FROM `attendance` WHERE admin_id=".$status_id;
    $exe1 = mysqli_query($conn, $sql1);
    if($exe1->num_rows > 0){

        $sql ="UPDATE add_details SET status=".$status." WHERE id=".$status_id;
        $exe = mysqli_query($conn, $sql);
        echo "<script type=text/javascript>";
        echo "alert('Form Feedback Activated Successfully !');";
        echo "document.location.href='my_trainings.php'";
        echo"</script>"; 
    }
    else
    {
        echo "<script type=text/javascript>";
        echo "alert('Failed to Activate ! Atleast one Attendance Entry Required !');";
        echo "document.location.href='my_trainings.php'";
        echo"</script>"; 
   
    }


?>
