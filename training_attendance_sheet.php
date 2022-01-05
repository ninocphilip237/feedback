<?php
session_start();
if(isset($_SESSION['user_type'])){
//   if($_SESSION['user_type'] != 'admin'){
//     echo "<script type=text/javascript>";
//     echo "alert('You are not authorized to access this page !');";
//     echo "document.location.href='index.php'";
//     echo"</script>";
//     exit();
//   }
}
else{
    echo "<script type=text/javascript>";
    echo "alert('You are not authorized to access this page !');";
    echo "document.location.href='login.php'";
    echo"</script>";
    exit();
}
include "includes/connect.php";
if(isset($_REQUEST['id'])){
 $id = $_REQUEST['id'];
$sql = "SELECT DISTINCT a.date,a.duration,a.user_id,a.emp_id,a.emp_name,a.emp_dept,s.venue,a.admin_id,s.name FROM `attendance` a INNER JOIN add_details s ON a.admin_id=s.id WHERE a.admin_id = '".$id."' ORDER BY a.date";
$exe = mysqli_query($conn, $sql);
if($exe->num_rows > 0)
{
}
else
{
	echo "<script type=text/javascript>";
    echo "alert('No Attendance data to show !');";
    echo "document.location.href='index.php'";
    echo"</script>";
    exit();
}
$fac="";
$sqlx = "SELECT * From faculty where admin_id='".$id."'";
$exex=mysqli_query($conn,$sqlx);
while ($c = mysqli_fetch_array($exex)) {
	$fac .= $c['faculty']." , ";
	
}
$fac= rtrim($fac, ' , ');

}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 6.4.4.2 (Linux)"/>
	<meta name="created" content="2006-09-16T00:00:00"/>
	<meta name="changed" content="2018-10-31T05:03:45"/>
	<meta name="AppVersion" content="14.0300"/>
	<meta name="DocSecurity" content="0"/>
	<meta name="HyperlinksChanged" content="false"/>
	<meta name="LinksUpToDate" content="false"/>
	<meta name="ScaleCrop" content="false"/>
	<meta name="ShareDoc" content="false"/>
	
	<style type="text/css">
	   @media print {
           .pagebreak { page-break-before: always; } /* page-break-after works, as well */
		   .ListHeading {
        background-color: #632523 !important;
        -webkit-print-color-adjust: exact; 
          }
        }
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:x-small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  } 
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  } 
		comment { display:none;  } 
	</style>
	
</head>

<body>
<?php
$i=0;$j=$pagebreak=0;$k=1;
$date='';
while ($a = mysqli_fetch_array($exe)) {

	//echo "</br>itop=".$i.",".$j.",".$k."</br>";
	if($j==0){
 ?> 
  
 <!-- <div class="pagebreak"> -->
	<?php } 

	if($date!=$a['date']){
		$date = $a['date'];
		$i=0;
		$j=0;
		$k=1;
	  }

	if($i==0){
		$date = $a['date'];

		
	?>
	<?php if($pagebreak==1){ echo "</div> "; } $pagebreak=1;  ?>
     <table cellspacing="0" border="0">
	<colgroup width="68"></colgroup>
	<colgroup width="144"></colgroup>
	<colgroup width="315"></colgroup>
	<colgroup width="199"></colgroup>
	<colgroup width="188"></colgroup>
	<colgroup width="138"></colgroup>
	<?php echo ' <div class="pagebreak">'; ?>
	<tr>
		<td class="ListHeading" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 height="51" align="center" valign=middle bgcolor="#632523">
		<span style="display:flex; justify-content: space-between;align-items: center;">
		<div>
		<img src="assets/images/logo-headers.png" width=48 height=48 hspace=12 vspace=0 >
		</div>
		    <b><font face="Times New Roman" size=5 color="#FFFFFF">
				Training Attendance Sheet
			</font>
		   </b>
		 <div style="background: white; padding: 4px; margin-right: 10px;">
			<b><font face="Times New Roman" size=3 color="#00000">
			VSPL/FM/24; V1.0
			</font>
		   </b>
		</div>
       </span>
		</td>
	</tr>
	<tr>
		<td height="11" align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><br></font></td>
		<td align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><br></font></td>
		<td align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><br></font></td>
		<td align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><br></font></td>
		<td align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><br></font></td>
		<td align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" colspan=2 height="33" align="center" valign=middle><b><font face="Times New Roman" size=3 color="#000000">Training Topic</font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><?php echo $a['name']; ?></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Times New Roman" size=3 color="#000000">Date &amp; Time</font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan=2 align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><?php echo $a['date']." - ".$a['duration']." Hr(s)"; ?></font></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" colspan=2 height="33" align="center" valign=middle><b><font face="Times New Roman" size=3 color="#000000">Trainer</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><?php echo $fac; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Times New Roman" size=3 color="#000000">Venue</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan=2 align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><?php echo $a['venue']; ?></font></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" colspan=2 height="52" align="center" valign=middle><b><font face="Times New Roman" size=3 color="#000000">Summary of Topics covered</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan=4 align="left" valign=middle><font face="Times New Roman" size=3 color="#000000">&nbsp;&nbsp;<?php echo $a['name']; ?></font></td>
		</tr>
	<tr>
		<td height="11" align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><br></font></td>
		<td align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><br></font></td>
		<td align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><br></font></td>
		<td align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><br></font></td>
		<td align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><br></font></td>
		<td align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><br></font></td>
	</tr>
</table>
<?php }
 
?>
<?php 
  if($j==0){
?>

<table class="<?php if($k!=1){ echo 'pagebreak'; } ?>" cellspacing="0" border="0">
	<colgroup width="68"></colgroup>
	<colgroup width="144"></colgroup>
	<colgroup width="315"></colgroup>
	<colgroup width="199"></colgroup>
	<colgroup width="188"></colgroup>
	<colgroup width="138"></colgroup>

	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="40" align="center" valign=middle><b><font face="Times New Roman" size=3 color="#000000">Sl No</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Times New Roman" size=3 color="#000000">Employee ID</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Times New Roman" size=3 color="#000000">Employee Name</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Times New Roman" size=3 color="#000000">Department</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Times New Roman" size=3 color="#000000">Signature</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Times New Roman" size=3 color="#000000">Remarks</font></b></td>
	</tr>
<?php } ?>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="34" align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><?php echo $k; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><?php echo $a['emp_id']; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;D-MMM-YY"><font face="Times New Roman" size=3 color="#000000"><?php echo $a['emp_name']; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><?php echo $a['emp_dept']; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Times New Roman" size=3 color="#000000"><br></font></td>
	</tr>
<?php 
  $j=1;
  if($j==0){
?>	
</table>



<?php } 
 
	if(!($k % 20)){
		$j=0;
	   // echo "dsdsd";
	  } 
 
	$k++;
	
?>

<?php 

 
//echo "</br>ibot=".$i.",".$j.",".$k."</br>";
if(($j==0)){ ?>
    <!-- </div> -->
   <?php
   }
   $i=1;
 } 
 ?>
<!-- ************************************************************************** -->
</body>

</html>
