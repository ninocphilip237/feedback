<?php
    include "includes/connect.php";
    $admin_id=$_GET['id'];
    $date=$_GET['date'];
   
    
        $sql ="DELETE FROM `attendance` WHERE `admin_id`='".$admin_id."' and `date`='".$date."'";
        if(mysqli_query($conn, $sql)){
        echo "<script type=text/javascript>";
        echo "alert('Attendance deleted Successfully !');";
        echo "document.location.href='my_trainings.php'";
        echo"</script>"; 
        }
        else
        {
            echo "<script type=text/javascript>";
            echo "alert('Error !');";
            echo "document.location.href='my_trainings.php'";
            echo"</script>"; 
        }

 

?>
