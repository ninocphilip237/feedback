
<?php
$back_id=$_GET['feedback_id'];
include "includes/connect.php";
$sql="select * from feedback_effectiveness where admin_id='".$back_id."' and learning_tp IS NOT NULL";
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
  $sql1="select * from add_details where id='".$looping_list['admin_id']."'";
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
    <TD colspan=5 class="tr0 td0"><P class="p0 ft0">Effectiveness &amp; Evaluation Form</P></TD>
    <TD class="tr0 td1"><P class="p1 ft1">&nbsp;</P></TD>
    <TD colspan=2 class="tr0 td2"><P class="p1 ft2">VSPL/FM/72, V1.1</P></TD>
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
    <TD class="tr3 td11"><P class="p2 ft3">Participant Name & Department</P></TD>
    <TD class="tr2 td11" colspan=9>&nbsp;&nbsp;<?php echo $looping_list['user_name']?></TD>
</TR>
  </table>
<table cellpadding=0 cellspacing=0 class="t0">

<TR>
<P CLASS="western" STYLE="margin-bottom: 0.11in"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>I.
Please Read Carefully:</B></FONT></FONT></P>
<P CLASS="western" STYLE="margin-bottom: 0.11in"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Ratings
have to be done by the Immediate Superior.  The rating scale
guidelines are as follows:</FONT></FONT></P>

<TABLE WIDTH=638 CELLPADDING=7 CELLSPACING=0>
	
	<TR VALIGN=TOP>
		<TD WIDTH=91 BGCOLOR="#bebebe" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Rating</B></FONT></FONT></P>
		</TD>
		<TD WIDTH=92 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" ALIGN=CENTER><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Excellent</FONT></FONT></P>
		</TD>
		<TD WIDTH=92 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" ALIGN=CENTER><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Very
			Good</FONT></FONT></P>
		</TD>
		<TD WIDTH=92 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" ALIGN=CENTER><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Good</FONT></FONT></P>
		</TD>
		<TD WIDTH=92 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" ALIGN=CENTER><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Fair</FONT></FONT></P>
		</TD>
		<TD WIDTH=92 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" ALIGN=CENTER><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Poor</FONT></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=91 BGCOLOR="#bebebe" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Score</B></FONT></FONT></P>
		</TD>
		<TD WIDTH=92 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" ALIGN=CENTER><FONT FACE="Times New Roman, serif"><FONT SIZE=3>5</FONT></FONT></P>
		</TD>
		<TD WIDTH=92 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" ALIGN=CENTER><FONT FACE="Times New Roman, serif"><FONT SIZE=3>4</FONT></FONT></P>
		</TD>
		<TD WIDTH=92 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" ALIGN=CENTER><FONT FACE="Times New Roman, serif"><FONT SIZE=3>3</FONT></FONT></P>
		</TD>
		<TD WIDTH=92 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" ALIGN=CENTER><FONT FACE="Times New Roman, serif"><FONT SIZE=3>2</FONT></FONT></P>
		</TD>
		<TD WIDTH=92 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P CLASS="western" ALIGN=CENTER><FONT FACE="Times New Roman, serif"><FONT SIZE=3>1</FONT></FONT></P>
		</TD>
	</TR>
</TABLE>
</TR>
<TR>
    <td>
<P CLASS="western" STYLE="margin-top: 0.17in; margin-bottom: 0in"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Please
put a [</B></FONT></FONT><FONT COLOR="#545454"><FONT FACE="Segoe UI Emoji, serif"><FONT SIZE=2 STYLE="font-size: 10pt"><SPAN STYLE="background: #ffffff">✔</SPAN></FONT></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>]
tick mark on the relevant box.</B></FONT></FONT></P>
    </td>
</TR>
<TR>
    <td>
        <OL>
            <LI>
                <P STYLE="margin-top: 0.17in; margin-bottom: 0in"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Learning from the Training program</FONT></FONT></P>
                <P style="display: flex;align-items: center;">
                    Excellent &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['learning_tp']=='5') echo "✔"; ?></SPAN>
                    &nbsp;&nbsp; &nbsp;&nbsp;Very Good &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['learning_tp']=='4') echo "✔"; ?></SPAN>
                    &nbsp;&nbsp; &nbsp;&nbsp; Good &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['learning_tp']=='3') echo "✔"; ?></SPAN>   
                    &nbsp;&nbsp; &nbsp;&nbsp;Fair  &nbsp;&nbsp;       
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['learning_tp']=='2') echo "✔"; ?></SPAN>         
                    &nbsp;&nbsp; &nbsp;&nbsp; Poor  &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['learning_tp']=='1') echo "✔"; ?></SPAN>
                </P>
            </LI>
            <LI>
                <P STYLE="margin-top: 0.17in; margin-bottom: 0in"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Application of learning</FONT></FONT></P>
                <P style="display: flex;align-items: center;">
                    Excellent &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['app_learn']=='5') echo "✔"; ?></SPAN>
                    &nbsp;&nbsp; &nbsp;&nbsp;Very Good &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['app_learn']=='4') echo "✔"; ?></SPAN>
                    &nbsp;&nbsp; &nbsp;&nbsp; Good &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['app_learn']=='3') echo "✔"; ?></SPAN>   
                    &nbsp;&nbsp; &nbsp;&nbsp;Fair  &nbsp;&nbsp;       
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['app_learn']=='2') echo "✔"; ?></SPAN>         
                    &nbsp;&nbsp; &nbsp;&nbsp; Poor  &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['app_learn']=='1') echo "✔"; ?></SPAN>
                </P>
            </LI>
        
        </OL>
  </td>
<TR>
  <td>
  <P CLASS="western" STYLE="margin-top: 0.17in; margin-bottom: 0in"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Change Factor:</B></FONT></FONT></P>
  </td>
</TR>
<TR>
    <TD><P class="p2 ft10" style="margin-top: 20px; margin-bottom: 20px;">Whether change has taken place with the participant in terms of:</P></TD>
</TR>
<TR>
    <td>
        <OL>
            <LI>
   
                <P style="display: flex;align-items: center;">
                    Attitudinal change: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Excellent &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['att_change']=='5') echo "✔"; ?></SPAN>
                    &nbsp;&nbsp; &nbsp;&nbsp;Very Good &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['att_change']=='4') echo "✔"; ?></SPAN>
                    &nbsp;&nbsp; &nbsp;&nbsp;Good &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['att_change']=='3') echo "✔"; ?></SPAN>   
                    &nbsp;&nbsp; &nbsp;&nbsp;Fair  &nbsp;&nbsp;       
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['att_change']=='2') echo "✔"; ?></SPAN>         
                    &nbsp;&nbsp; &nbsp;&nbsp; Poor  &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['att_change']=='1') echo "✔"; ?></SPAN>
                </P>
            </LI>
            <LI>
   
                <P style="display: flex;align-items: center;">
                Knowledge Development: &nbsp;&nbsp;
                    Excellent &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['knw_dev']=='5') echo "✔"; ?></SPAN>
                    &nbsp;&nbsp; &nbsp;&nbsp;Very Good &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['knw_dev']=='4') echo "✔"; ?></SPAN>
                    &nbsp;&nbsp; &nbsp;&nbsp;Good &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['knw_dev']=='3') echo "✔"; ?></SPAN>   
                    &nbsp;&nbsp; &nbsp;&nbsp;Fair  &nbsp;&nbsp;       
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['knw_dev']=='2') echo "✔"; ?></SPAN>         
                    &nbsp;&nbsp; &nbsp;&nbsp; Poor  &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['knw_dev']=='1') echo "✔"; ?></SPAN>
                </P>
            </LI>
            <LI>
   
                <P style="display: flex;align-items: center;">
                  	Skill Development: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Excellent &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['skill_dev']=='5') echo "✔"; ?></SPAN>
                    &nbsp;&nbsp; &nbsp;&nbsp;Very Good &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['skill_dev']=='4') echo "✔"; ?></SPAN>
                    &nbsp;&nbsp; &nbsp;&nbsp;Good &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['skill_dev']=='3') echo "✔"; ?></SPAN>   
                    &nbsp;&nbsp; &nbsp;&nbsp;Fair  &nbsp;&nbsp;       
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['skill_dev']=='2') echo "✔"; ?></SPAN>         
                    &nbsp;&nbsp; &nbsp;&nbsp; Poor  &nbsp;&nbsp;
                    <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['skill_dev']=='1') echo "✔"; ?></SPAN>
                </P>
            </LI>
            

            
        
        </OL>
  </td>
</TR>
<TR>

    
    <TD class="tr15 td1"><P class="p1 ft1">&nbsp;</P></TD>
    <TD class="tr15 td27"><P class="p1 ft1">&nbsp;</P></TD>
    <TD class="tr15 td31"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
    <td>
    <P style="display: flex;align-items: center;">
        <b>Overall Rating: &nbsp;&nbsp;</b>
        Excellent &nbsp;&nbsp;
        <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['overall_rating']=='5') echo "✔"; ?></SPAN>
        &nbsp;&nbsp; &nbsp;&nbsp;Very Good &nbsp;&nbsp;
        <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['overall_rating']=='4') echo "✔"; ?></SPAN>
        &nbsp;&nbsp; &nbsp;&nbsp;Good &nbsp;&nbsp;
        <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['overall_rating']=='3') echo "✔"; ?></SPAN>   
        &nbsp;&nbsp; &nbsp;&nbsp;Fair  &nbsp;&nbsp;       
        <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['overall_rating']=='2') echo "✔"; ?></SPAN>         
        &nbsp;&nbsp; &nbsp;&nbsp; Poor  &nbsp;&nbsp;
        <SPAN DIR="LTR" STYLE="float: left; width: 0.1in; height: 0.26in; border: 1px solid #000000; padding: 0.01in 0.1in; background: #ffffff"><?php if($looping_list['overall_rating']=='1') echo "✔"; ?></SPAN>
    </P>
    </td>
</TR>
<TR>   
    <TD class="tr15 td1"><P class="p1 ft1">&nbsp;</P></TD>
    <TD class="tr15 td27"><P class="p1 ft1">&nbsp;</P></TD>
    <TD class="tr15 td31"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
  <TD>
    <p>Your Suggestions /Comments for further improvements:</p>
  </TD>
</TR>
<TR>
  <TD>
    <p><?php echo $looping_list['comments']; ?></p>
  </TD>
</TR> 
<TR>   
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
