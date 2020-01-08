<!DOCTYPE html>
<html>
<head>
<title>Admin-Login</title>
<meta charset="utf-8">
<meta name="viewport" content="device=device-width,initial scale=1.0">

<!----link goes here------>
<link rel="stylesheet" href="../student/tech.css" media="all" type="text/css">
<link rel="shortcut icon" href="../file/slogo.jpg">
<head>

<body>

<!--header content------->

<table width="100%" border="0" id="header_table">
<tr>
<td>
nav
</td>
   <td align="center">
     <img src="..\file/slogo.jpg" id="school_logo">
</td>
    <td align="center">
        <font class="school_name">Ehugbo Technical College Afikpo</font>
    </td>
	


</tr>
</table>



<!-----------header media content------->
<div class="media_header_div">

<div class="nav_bar">Nav</div>

<img src="..\file/slogo.jpg" id="school_logo">
<br>
<font class="school_name">Ehugbo Technical College Afikpo</font>

</div>




<!---------result details input--------------->



<div class="login_div">

<font class="result_header">Admin Login</font>
<br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" >

<table width="94%" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<br>
<label class="label">Phone</label>
<input type="text" placeholder="Enter phone number" class="result_details"
name="phone"  required>
</td>
</tr>


<tr>
<td>
<br>
<label class="label">Password</label>
<input type="password" placeholder="Enter Password" class="result_details" name="pass" required>
</td>
</tr>

<tr>
<td>
<input type="submit" value="Login" id="submit_button" name="suba">
</td>
</tr>

<tr align="center">
<td>
<?php
if(isset($_GET['erro'])){
	
	echo '<font color=red>'.$_GET['erro'].'<font>';
	
}

?>

</table>

</form>



</div>


<div class="footer2">

<font class="foot_font"> Ehugbo Technical College  &copy<?php echo date("Y");?> All Right Reserved </font>
</div>


<?php

require '../backend/login_script.php';

?>