    <?php
   //require_once('auth.php');
	session_start();	
	include('connection.php');
 $patid =  $_POST["pid"];

   ?>

  
  
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0043)file:///C:/xampp/htdocs/package/package.htm -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="keywords" content="ss, packages, tour">
<meta name="description" content="Your Complete package tour Internet friend. Information about various package ">
<meta name="author" content="sspackage">
<title>Attend Patient</title>

<link type="text/css" href="./index_files/menu.css" rel="stylesheet">
	<script src="./index_files/ga.js" async="" type="text/javascript"></script><script type="text/javascript" src="./index_files/jquery.js"></script>
	<script type="text/javascript" src="./index_files/menu.js"></script>
    

<style type="text/css">
body,td,th {
	color: #060;
	width: 1000px;
}
</style>
<style>
.fadein {
	position:relative;
	height:210px;
	width:700px;
	left: 0px;
	top: 0px;
	right: 0px;
	bottom: 0px;
	float: left;
}
.fadein img {
	position:absolute;
	left:0px;
	top:0px;
}

body {
		background-color:#FFFFFF;
		background-repeat:no-repeat;
		background-position:top;
}
.style1 {color: #3300FF}
.style2 {color: #0000FF}
.style3 {font-size: 14px}
.style8 {font-size: 12px}
.style10 {color: #000000}
.style13 {font-size: 16}
.style14 {color: #66FF33}
</style>

<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});
</script>

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body background="index_files/back4.png" >
<script>
function validateForm()
{


var a=document.forms["updatepatient"]["prescription"].value;
var b=document.forms["updatepatient"]["reason"].value;


  if (a==null || a=="")
  {
  alert("Prescription shouldn't be empty");
  return false;
  }

  if (b==null || b=="")
  {
  alert("Reason shouldn't be empty");
  return false;
  }
 
}
</script>





<!--Container Start--->
<!--Top ads Start--->
<!--Top ads ends--->
<!--Welcometext Start--->
<div class="welcomtext" id="welcometext">
  <h2 align="right" class="style2">Edit Patient  -  Usha Eye Hospitals </h2>
  <h1 align="center">&nbsp;</h1>
  <div align="right">
<h4><em>.</em></h4>
    <!--Time Start--->  
	
 <h1>&nbsp;</h1>
 <h1>&nbsp;</h1>
 <h1><span class="style8">Signed as: 
   <?php 
	 if($_SESSION['super']) {
	 echo "super";
	 }
	 if($_SESSION['admin']) {
	 echo "admin";
	 }
	 else {
	  echo $_SESSION['SESS_FIRST_NAME']; echo " ";
      echo $_SESSION['SESS_LAST_NAME'];
	  } ?>
   
 </span><a href="logout.php" class="style3">Logout</a></span> </h1>
 <p align="center">&nbsp;</p>
 <p align="center"><a href="viewpatient.php"> &#9619;&#9619;&#9619;&#9619;&#9619; View Patients
   </h1>
   <!--Time Ends--->
  &#9619;&#9619;&#9619;&#9619;&#9619;</p>
  </div>
</div>
<div align="left">
  <p style="y-index:300;margin-top:-2px;"><img src="./index_files/main-delimiter.png" alt="greenbar2" width="1000" height="5" align="baseline" /></p>
</div>
 <!--Welcometext end--->  
<!--Menu Start--->
<div id="menu" style="y-index:300;margin-top:-2px;">
  <ul class="menu">
  <div align="left"></div>
      <li class="current"><a href=<?php if($_SESSION['admin']) { if($_SESSION['super']) echo "super"; echo "adminhome.php" ; } else { echo "doctor_home.php"; } ?> class="parent"><span><font color="#0000FF">Home</font></span></a>      </li>
      <li><a href="file:///E:/web/link" class="parent style1"><span><font color="#0000FF">View info</font></span></a>
          <ul style="display: none; left: -2px; width: 163px; height: 120px; overflow: hidden;">
            <li><a href="localpackage.php"><span style="color: rgb(169, 169, 169);">info1</span></a></li>
              <li><a href="statepackage.php"><span style="color: rgb(169, 169, 169);">info2</span></a></li>
              <li><a href="seasonalpackage.php"><span style="color: rgb(169, 169, 169);">info3</span></a></li>
          </ul>
    </li>
      
      <li style="left: 35px; width: 56px; display: block; overflow: hidden;" class="back"><div class="left"></div></li><li class="back" style="left: 35px; width: 56px;"><div class="left"></div></li><li class="back" style="left: 35px; width: 56px; display: block; overflow: hidden;"><div class="left"></div></li><li class="back" style="left: 35px; width: 56px;"><div class="left"></div></li><li class="back" style="left: 35px; width: 56px; display: block;"><div class="left"></div></li></ul>
</div>



<div align="left">
  <p style="y-index:300;margin-top:-2px;"><img src="./index_files/main-delimiter.png" alt="greenbar2" width="1000" height="5" align="baseline" /></p>
</div>
<p>&nbsp;______________________________________________________________________________________________________________________________________________________</p>

 <?php
  $data = "select * from patient where pid='$patid'";
  
  $query = mysql_query($data);
  
  if( mysql_num_rows($query) > 0 ) {
  
   $pat = mysql_fetch_assoc($query) ;
   
 }
 ?>
 



<p>&nbsp;</p>

<table width="100" height="50" border="2" cellpadding="5" cellspacing="5">
	<tr >
    <td align="center" class="style13"><span class="style10">Patient Details </span></td>
	<?php 
	if($_SESSION['admin']) { ?>
	 <form name="patient"  onSubmit="return validateForm()" action="patient_edit.php" method="post">
	 <input name="pid" type="hidden" value="<?php echo $patid ?>" />
	  <td><input name="" type="submit" value="Edit" /></td>
	 <?php } ?>
	</tr>
	
	<tr>
    <td class="style13"><span class="style10">Patient name </span></td>
    <td class="style13"><span class="style10"><?php echo $pat['name']; ?></span></td>
	</tr>
  
    <tr>
    <td class="style13"><span class="style10">Phone </span></td>
    <td class="style13"><span class="style10"><?php echo $pat['phone']; ?></span></td>
	</tr>
  
    <tr>
    <td class="style13"><span class="style10">Gender </span></td>
    <td class="style13"><span class="style10"><?php echo $pat['gender']; ?></span></td>
	</tr>
	
	<tr>
    <td class="style13"><span class="style10">Dob </span></td>
    <td class="style13"><span class="style10"><?php echo $pat['dob']; ?></span></td>
	</tr>
	
	<tr>
    <td class="style13"><span class="style10">Occupation </span></td>
    <td class="style13"><span class="style10"><?php echo $pat['occupation']; ?></span></td>
	</tr>
	
	<tr>
    <td class="style13"><span class="style10">Father/Husband name </span></td>
    <td class="style13"><span class="style10"><?php echo $pat['fhname']; ?></span></td>
	</tr>
	<tr>
    <td class="style13"><span class="style10">Father/Husband Occupation </span></td>
    <td class="style13"><span class="style10"><?php echo $pat['fhoccupation']; ?></span></td>
	</tr>
	<tr>
    <td class="style13"><span class="style10">Address </span></td>
    <td class="style13"><span class="style10"><?php echo $pat['address']; ?></span></td>
	</tr>
	
</table>

<table width="700" height="100" border="2" cellpadding="5" cellspacing="5">
	<tr>
	 <td class="style13"><span class="style10">Patient History </span></td>
	</tr>
	<tr>
	
    <td class="style13"><span class="style10">Date </span></td>
    <td class="style13"><span class="style10">Doctor ID </span></td>
	<td class="style13"><span class="style10">Reason / Issue </span></td>
	<td class="style13"><span class="style10">Prescription </span></td>
  </tr>
<?php	
  $data = "select * from opvisit where pid='$patid' and prescription !='' ";
  
  $query = mysql_query($data);
  
  if( mysql_num_rows($query) > 0 ) {
  
  	while( $member = mysql_fetch_assoc($query) ) {
		?>
	<tr>
	
    <td class="style13"><span class="style10"><?php echo $member['date']; ?></span></td>
    <td class="style13"><span class="style10"><?php echo $member['did']; ?></span></td>
	<td class="style13"><span class="style10"><?php echo $member['reason']; ?></span></td>
	<td class="style13"><span class="style10"><?php echo $member['prescription']; ?></span></td>
  </tr>
		
		
		
		
 <?php	 	
}
}
?>
<p>&nbsp; </p>
</body>
</html>