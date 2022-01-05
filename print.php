
<?php
$back_id=$_GET['feedback_id'];
include "includes/connect.php";
$sql="select * from feedback where admin_id='$back_id' and faculty_knw IS NOT NULL";
$exe=mysqli_query($conn,$sql);
 

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<META http-equiv="X-UA-Compatible" content="IE=8">
<TITLE>Feedback form</TITLE>
<META name="generator" content="BCL easyConverter SDK 5.0.140">
<STYLE type="text/css">
@media print {
    .pagebreak { page-break-before: always; } /* page-break-after works, as well */
}
body {margin-top: 0px;margin-left: 0px;}

#page_1 {position:relative; overflow: hidden;margin: 66px 0px 65px 94px;padding: 0px;border: none;width: 722px;}

#page_1 #p1dimg1 {position:absolute;top:0px;left:2px;z-index:-1;width:664px;height:790px;}
#page_1 #p1dimg1 #p1img1 {width:664px;height:790px;}




.dclr {clear:both;float:none;height:1px;margin:0px;padding:0px;overflow:hidden;}

.ft0{font: bold 21px 'Times New Roman';line-height: 24px;}
.ft1{font: 1px 'Times New Roman';line-height: 1px;}
.ft2{font: bold 15px 'Times New Roman';line-height: 17px;}
.ft3{font: bold 16px 'Times New Roman';line-height: 19px;}
.ft4{font: bold 16px 'Times New Roman';line-height: 18px;}
.ft5{font: 16px 'MS PGothic';line-height: 16px;position: relative; bottom: 3px;}
.ft6{font: 16px 'Times New Roman';line-height: 18px;}
.ft7{font: 16px 'Times New Roman';line-height: 19px;}
.ft8{font: 1px 'Times New Roman';line-height: 13px;}
.ft9{font: 1px 'Times New Roman';line-height: 6px;}
.ft10{font: 16px 'Times New Roman';line-height: 17px;}
.ft11{font: bold 16px 'Times New Roman';line-height: 17px;}
.ft12{font: 1px 'Times New Roman';line-height: 17px;}
.ft13{font: .5px 'Times New Roman';line-height: 10px;}

.p0{text-align: left;padding-left: 141px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p1{text-align: left;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p2{text-align: left;padding-left: 8px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p3{text-align: left;padding-left: 19px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p4{text-align: center;padding-right: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p5{text-align: center;padding-right: 15px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p6{text-align: center;padding-right: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p7{text-align: left;padding-left: 105px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p8{text-align: center;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p9{text-align: left;padding-left: 73px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p10{text-align: left;padding-left: 2px;margin-top: 42px;margin-bottom: 0px;}
.p11{text-align: left;padding-left: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}

.td0{padding: 0px;margin: 0px;width: 464px;vertical-align: bottom;}
.td1{padding: 0px;margin: 0px;width: 53px;vertical-align: bottom;}
.td2{padding: 0px;margin: 0px;width: 148px;vertical-align: bottom;}
.td3{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 189px;vertical-align: bottom;}
.td4{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 75px;vertical-align: bottom;}
.td5{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 85px;vertical-align: bottom;}
.td6{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 101px;vertical-align: bottom;}
.td7{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 14px;vertical-align: bottom;}
.td8{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 53px;vertical-align: bottom;}
.td9{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 66px;vertical-align: bottom;}
.td10{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 82px;vertical-align: bottom;}
.td11{border-left: #000000 1px solid;border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 187px;vertical-align: bottom;}
.td12{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 81px;vertical-align: bottom;}
.td13{border-left: #000000 1px solid;border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 262px;vertical-align: bottom;}
.td14{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 84px;vertical-align: bottom;}
.td15{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 100px;vertical-align: bottom;}
.td16{padding: 0px;margin: 0px;width: 14px;vertical-align: bottom;}
.td17{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 52px;vertical-align: bottom;}
.td18{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 65px;vertical-align: bottom;}
.td19{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 81px;vertical-align: bottom;}
.td20{border-left: #000000 1px solid;border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 262px;vertical-align: bottom;}
.td21{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 84px;vertical-align: bottom;}
.td22{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 100px;vertical-align: bottom;}
.td23{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 52px;vertical-align: bottom;}
.td24{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 65px;vertical-align: bottom;}
.td25{padding: 0px;margin: 0px;width: 85px;vertical-align: bottom;}
.td26{padding: 0px;margin: 0px;width: 101px;vertical-align: bottom;}
.td27{padding: 0px;margin: 0px;width: 66px;vertical-align: bottom;}
.td28{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 200px;vertical-align: bottom;}
.td29{padding: 0px;margin: 0px;width: 264px;vertical-align: bottom;}
.td30{padding: 0px;margin: 0px;width: 200px;vertical-align: bottom;}
.td31{padding: 0px;margin: 0px;width: 82px;vertical-align: bottom;}
.td32{padding: 0px;margin: 0px;width: 533px;vertical-align: bottom;background: #fbe4d5;}
.td33{padding: 0px;margin: 0px;width: 95px;vertical-align: bottom;background: #fbe4d5;}

.tr0{height: 29px;}
.tr1{height: 38px;}
.tr2{height: 26px;}
.tr3{height: 27px;}
.tr4{height: 18px;}
.tr5{height: 31px;}
.tr6{height: 19px;}
.tr7{height: 13px;}
.tr8{height: 6px;}
.tr9{height: 17px;}
.tr10{height: 22px;}
.tr11{height: 21px;}
.tr12{height: 20px;}
.tr13{height: 10px;}
.tr14{height: 25px;}
.tr15{height: 34px;}

.t0{width: 665px;margin-left: 2px;margin-top: 1px;font: 16px 'Times New Roman';}
.t1{width: 628px;margin-top: 20px;font: bold 16px 'Times New Roman';}

</STYLE>
</HEAD>
<BODY>
<?php
while($looping_list=mysqli_fetch_array($exe)) 
{
  $sql1="select * from add_details where id='$back_id' ";
  $exe1=mysqli_query($conn,$sql1);
  while($form_data=mysqli_fetch_array($exe1)) 
  {
  ?>
  

  
  
  

<div class="pagebreak">

<DIV id="page_1">
<DIV id="p1dimg1">
<IMG src="assets/images/logo-headers.png"></DIV>


<DIV class="dclr"></DIV>
<TABLE cellpadding=0 cellspacing=0 class="t0">
<TR>
    <TD colspan=5 class="tr0 td0"><P class="p0 ft0">Training Feedback Form - Trainee</P></TD>
    <TD class="tr0 td1"><P class="p1 ft1">&nbsp;</P></TD>
    <TD colspan=2 class="tr0 td2"><P class="p1 ft2">VSPL/FM/25, V1.0</P></TD>
</TR>
<TR>
    <TD class="tr1 td3"><P class="p1 ft1">&nbsp;</P></TD>
    <TD class="tr1 td4"><P class="p1 ft1">&nbsp;</P></TD>
    <TD class="tr1 td5"><P class="p1 ft1">&nbsp;</P></TD>
    <TD class="tr1 td6"><P class="p1 ft1">&nbsp;</P></TD>
    <TD class="tr1 td7"><P class="p1 ft1">&nbsp;</P></TD>
    <TD class="tr1 td8"><P class="p1 ft1">&nbsp;</P></TD>
    <TD class="tr1 td9"><P class="p1 ft1">&nbsp;</P></TD>
    <TD class="tr1 td10"><P class="p1 ft1">&nbsp;</P></TD>
</TR>

<TR>

    <TD class="tr2 td11"><P class="p2 ft3">Name of the Training</P></TD>
    <TD class="tr2 td11" colspan=9>&nbsp;&nbsp;<?php echo $form_data['name']?></TD>

<TR>
    
    <TD class="tr2 td11"><P class="p2 ft3">Duration, Date, Venue</P></TD>
    <TD class="tr2 td11" colspan=9>&nbsp;&nbsp;<?php echo $looping_list['f_duration']; ?>,&nbsp;&nbsp;<?php echo $looping_list['f_date']; ?>,&nbsp;&nbsp;<?php echo $form_data['venue']?></TD>
</TR>

<TR>
    <TD class="tr2 td11"><P class="p2 ft3">Faculty / Faculties</P></TD>
    <TD class="tr2 td11" colspan=9>&nbsp;&nbsp;<?php 
                               if($form_data['fac_type']=='external'){
                                  echo $form_data['faculty'];
                               }
                               else
                               {
                                $fac = '';
                                $sqlx = "SELECT * From faculty where admin_id='".$form_data['id']."'";
                                $exex=mysqli_query($conn,$sqlx);
                                while ($c = mysqli_fetch_array($exex)) {
                                 $fac=$fac.$c['faculty']." , ";
                                   
                                }
                                $faclty = rtrim($fac,' , ');
                                   echo $faclty;
                               } 
                            ?></TD>
</TR>

<TR>
    <TD class="tr3 td11"><P class="p2 ft3">Course objective</P></TD>
    <TD class="tr2 td11" colspan=9>&nbsp;&nbsp;<?php echo $form_data['course']?></TD>
</TR>
<TR>
    <TD colspan=2 class="tr4 td13"><P class="p3 ft6"><SPAN class="ft4">Rating:</SPAN>(Please [<SPAN class="ft5">✓</SPAN>] the appropriate</P></TD>
    <TD class="tr4 td14"><P class="p4 ft4">Excellent</P></TD>
    <TD class="tr4 td15"><P class="p4 ft4">Very Good</P></TD>
    <TD class="tr4 td16"><P class="p1 ft1">&nbsp;</P></TD>
    <TD rowspan=2 class="tr5 td17"><P class="p5 ft3">Good</P></TD>
    <TD class="tr4 td18"><P class="p6 ft4">Fair</P></TD>
    <TD class="tr4 td19"><P class="p6 ft4">Poor</P></TD>
</TR>
<TR>
    <TD colspan=2 rowspan=2 class="tr6 td13"><P class="p7 ft7">column)</P></TD>
    <TD class="tr7 td14"><P class="p1 ft8">&nbsp;</P></TD>
    <TD class="tr7 td15"><P class="p1 ft8">&nbsp;</P></TD>
    <TD class="tr7 td16"><P class="p1 ft8">&nbsp;</P></TD>
    <TD class="tr7 td18"><P class="p1 ft8">&nbsp;</P></TD>
    <TD class="tr7 td19"><P class="p1 ft8">&nbsp;</P></TD>
</TR>
<TR>
    <TD class="tr8 td14"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td15"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td16"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td17"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td18"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td19"><P class="p1 ft9">&nbsp;</P></TD>
</TR>
<TR>
    <TD colspan=2 class="tr7 td20"><P class="p1 ft8">&nbsp;</P></TD>
    <TD class="tr7 td21"><P class="p1 ft8">&nbsp;</P></TD>
    <TD class="tr7 td22"><P class="p1 ft8">&nbsp;</P></TD>
    <TD class="tr7 td7"><P class="p1 ft8">&nbsp;</P></TD>
    <TD class="tr7 td23"><P class="p1 ft8">&nbsp;</P></TD>
    <TD class="tr7 td24"><P class="p1 ft8">&nbsp;</P></TD>
    <TD class="tr7 td12"><P class="p1 ft8">&nbsp;</P></TD>
</TR>
<TR>
    <TD colspan=2 class="tr9 td13"><P class="p2 ft10">How do you rate:</P></TD>
    <TD class="tr9 td14"><P class="p8 ft11">A</P></TD>
    <TD class="tr9 td15"><P class="p4 ft11">B</P></TD>
    <TD class="tr9 td16"><P class="p1 ft12">&nbsp;</P></TD>
    <TD class="tr9 td17"><P class="p5 ft11">C</P></TD>
    <TD class="tr9 td18"><P class="p6 ft2">D</P></TD>
    <TD class="tr9 td19"><P class="p6 ft11">E</P></TD>
</TR>
<TR>
    <TD colspan=2 class="tr7 td20"><P class="p1 ft8">&nbsp;</P></TD>
    <TD class="tr7 td21"><P class="p1 ft8">&nbsp;</P></TD>
    <TD class="tr7 td22"><P class="p1 ft8">&nbsp;</P></TD>
    <TD class="tr7 td7"><P class="p1 ft8">&nbsp;</P></TD>
    <TD class="tr7 td23"><P class="p1 ft8">&nbsp;</P></TD>
    <TD class="tr7 td24"><P class="p1 ft8">&nbsp;</P></TD>
    <TD class="tr7 td12"><P class="p1 ft8">&nbsp;</P></TD>
</TR>
<TR>
    <TD colspan=2 class="tr10 td13"><P class="p2 ft7">Faculty's knowledge of the topic?</P></TD>
    <TD class="tr10 td14">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($looping_list['faculty_knw'] == "Excellent")
        {
        echo "✓";
        } 
    ?>
        
    </TD>
    <TD class="tr10 td15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($looping_list['faculty_knw'] == "Very Good")
        {
        echo "✓";
        } 
    ?></TD>
   <TD class="tr10 td16"></TD>
    <TD class="tr10 td17">&nbsp;&nbsp;<?php if($looping_list['faculty_knw'] == "Good")
        {
        echo "✓";
        }?></TD>
         
    <TD class="tr10 td18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($looping_list['faculty_knw'] == "Fair")
        {
        echo "✓";
        }?></TD>
    <TD class="tr10 td19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($looping_list['faculty_knw'] == "Poor")
        {
        echo "✓";
        }?></TD>
</TR>
<TR>
    <TD colspan=2 class="tr8 td20"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td21"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td22"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td7"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td23"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td24"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td12"><P class="p1 ft9">&nbsp;</P></TD>
</TR>
<TR>
    <TD colspan=2 class="tr11 td13"><P class="p2 ft7">Communication skill of the faculty?</P></TD>
    <TD class="tr11 td14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($looping_list['communi_skill'] == "Excellent")
        {
        echo "✓";
        } 
    ?></TD>
    <TD class="tr11 td15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($looping_list['communi_skill'] == "Very Good")
        {
        echo "✓";
        } 
    ?></TD>
    <TD class="tr11 td16"><P class="p1 ft1">&nbsp;</P></TD>
    <TD class="tr11 td17">&nbsp;&nbsp;<?php if($looping_list['communi_skill'] == "Good")
        {
        echo "✓";
        } 
    ?></TD>
    
    <TD class="tr11 td18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($looping_list['communi_skill'] == "Fair")
        {
        echo "✓";
        } 
    ?></TD>
    <TD class="tr11 td19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($looping_list['communi_skill'] == "Poor")
        {
        echo "✓";
        } 
    ?></TD>
</TR>
<TR>
    <TD colspan=2 class="tr8 td20"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td21"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td22"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td7"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td23"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td24"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td12"><P class="p1 ft9">&nbsp;</P></TD>
</TR>
<TR>
    <TD colspan=2 class="tr10 td13"><P class="p2 ft7">Commitment of the faculty?</P></TD>
    <TD class="tr10 td14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($looping_list['commitment'] == "Excellent")
        {
        echo "✓";
        } 
        
    ?></TD>
    <TD class="tr10 td15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($looping_list['commitment'] == "Very Good")
        {
        echo "✓";
        } 
        
    ?></TD>
    <TD class="tr10 td16"><P class="p1 ft1">&nbsp;</P></TD>
    <TD class="tr10 td17">&nbsp;&nbsp;<?php if($looping_list['commitment'] == "Good")
        {
        echo "✓";
        } 
        
    ?></TD>
    
    <TD class="tr10 td18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($looping_list['commitment'] == "Fair")
        {
        echo "✓";
        } 
        
    ?></TD>
    <TD class="tr10 td19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($looping_list['commitment'] == "Poor")
        {
        echo "✓";
        } 
        
    ?></TD>
</TR>
<TR>
    <TD colspan=2 class="tr8 td20"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td21"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td22"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td7"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td23"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td24"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td12"><P class="p1 ft9">&nbsp;</P></TD>
</TR>
<TR>
    <TD colspan=2 class="tr11 td13"><P class="p2 ft7">General view of the training</P></TD>
    <TD class="tr11 td14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($looping_list['general_view'] == "Excellent")
        {
        echo "✓";
        } 
    ?></TD>
    <TD class="tr11 td15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($looping_list['general_view'] == "Very Good")
        {
        echo "✓";
        } 
    ?></TD>
    <TD class="tr11 td16"><P class="p1 ft1">&nbsp;</P></TD>
    <TD class="tr11 td17">&nbsp;&nbsp;<?php if($looping_list['general_view'] == "Good")
        {
        echo "✓";
        } 
    ?></TD>
    
    <TD class="tr11 td18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($looping_list['general_view'] == "Fair")
        {
        echo "✓";
        } 
    ?></TD>
    <TD class="tr11 td19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($looping_list['general_view'] == "Poor")
        {
        echo "✓";
        } 
    ?></TD>
</TR>
<TR>
    <TD colspan=2 class="tr8 td20"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td21"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td22"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td7"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td23"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td24"><P class="p1 ft9">&nbsp;</P></TD>
    <TD class="tr8 td12"><P class="p1 ft9">&nbsp;</P></TD>
</TR>
<TR>
    <TD colspan=2 class="tr2 td13"><P class="p2 ft7">Specify the <SPAN class="ft3">weakness </SPAN>of the course<br>(Faculty/ quality of training material/<br>timeliness of the program/<br>arrangements), if any.</P></TD>
    <TD colspan=8 class="tr2 td13" style="padding-left:5px;height: 100px; overflow:hidden;">&nbsp;&nbsp;<?php echo $looping_list['weakness']?></TD>
</TR>

<TR>
    <TD colspan=2 class="tr13 td20"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td5"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td6"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td7"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td8"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td9"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td12"><P class="p1 ft13">&nbsp;</P></TD>
</TR>
<TR>
    <TD colspan=2 class="tr2 td13"><P class="p2 ft7">Specify the <SPAN class="ft3">strength </SPAN>of the course<br>(Faculty/ quality of training material/<br>timeliness of the program/<br>arrangements), if any.</P></TD>
    <TD colspan=8 class="tr2 td13" style="padding-left:5px;height: 100px; overflow:hidden;">&nbsp;&nbsp;<?php echo $looping_list['strenth']?></TD>
</TR>

<TR>
    <TD colspan=2 class="tr13 td20"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td5"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td6"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td7"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td8"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td9"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td12"><P class="p1 ft13">&nbsp;</P></TD>
</TR>
<TR>
    <TD colspan=2 class="tr2 td13"><P class="p2 ft7">If any <SPAN class="ft3">addition </SPAN>is required in the<br>current topics to increase the value of<br>the course:</P></TD>
    <TD colspan=8 class="tr2 td13" style="padding-left:5px;height: 100px; overflow:hidden;">&nbsp;&nbsp;<?php echo $looping_list['addition']?></TD>
</TR>

<TR>
    <TD colspan=2 class="tr9 td20"><P class="p1 ft12">&nbsp;</P></TD>
    <TD class="tr9 td5"><P class="p1 ft12">&nbsp;</P></TD>
    <TD class="tr9 td6"><P class="p1 ft12">&nbsp;</P></TD>
    <TD class="tr9 td7"><P class="p1 ft12">&nbsp;</P></TD>
    <TD class="tr9 td8"><P class="p1 ft12">&nbsp;</P></TD>
    <TD class="tr9 td9"><P class="p1 ft12">&nbsp;</P></TD>
    <TD class="tr9 td12"><P class="p1 ft12">&nbsp;</P></TD>
</TR>
<TR>
    <TD colspan=2 class="tr2 td13"><P class="p2 ft7">If any <SPAN class="ft3">deletion </SPAN>is required in the<br>current topics to increase the value of<br>the course:</P></TD>
    <TD colspan=8 class="tr2 td13" style="padding-left:5px;height: 100px; overflow:hidden;">&nbsp;&nbsp;<?php echo $looping_list['deletion']?></TD>
</TR>

<TR>
    <TD colspan=2 class="tr13 td20"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td5"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td6"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td7"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td8"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td9"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td12"><P class="p1 ft13">&nbsp;</P></TD>
</TR>
<TR>
    <TD colspan=2 class="tr2 td13"><P class="p2 ft7">How well has the course met the<br>objectives?</P></TD>
    <TD colspan=8 class="tr2 td13" style="padding-left:5px;height: 100px; overflow:hidden;">&nbsp;&nbsp;<?php echo $looping_list['met_obj']?></TD>
</TR>


<TR>
    <TD colspan=2 class="tr13 td20"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td5"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td6"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td7"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td8"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td9"><P class="p1 ft13">&nbsp;</P></TD>
    <TD class="tr13 td12"><P class="p1 ft13">&nbsp;</P></TD>
</TR>


<TR>
    <TD colspan=2 class="tr15 td29"><font><b><?php echo $looping_list['user_name']?></b></font></TD>
    
    <TD class="tr15 td1"><P class="p1 ft1">&nbsp;</P></TD>
    <TD class="tr15 td27"><P class="p1 ft1">&nbsp;</P></TD>
    <TD class="tr15 td31"><P class="p1 ft1">&nbsp;</P></TD>
</TR>

</TABLE>

<TABLE cellpadding=0 cellspacing=0 class="t1">
<TR>
    <TD class="tr6 td32"><P class="p11 ft3">Vofox Controlled</P></TD>
    <TD class="tr6 td33"><P class="p1 ft7">Page <SPAN class="ft3">1 </SPAN>of <SPAN class="ft3">1</SPAN></P></TD>
</TR>
</TABLE>
</DIV>
</div>
<?php
}
}
?>
</BODY>


  
</HTML>
