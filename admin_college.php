<?php
require '../backend/connect.php';

session_start();

if(!isset($_SESSION['id'])){
	
	header("location:admin_login.php?erro=please login");
	
}


$update=$con->query("update staffs set last_page='".$_SERVER['SCRIPT_NAME']."' where id='".$_SESSION['id']."'");


?>
	
<!DOCTYPE html>
<html>
<head>
<title>Ehugbo-Admin</title>
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
	
<td align="right">
<ul class="list">
<li>Notifications</li>
 <li>Register Student</li>
    <li>Message</li>
	 <li>Welcome <?php echo @$_SESSION['name'];?></li>
</ul>
</td>

</tr>
</table>


<!---header content ends here------>


<!-----------header media content------->
<div class="media_header_div">

<div class="nav_bar">Nav</div>

<img src="..\file/slogo.jpg" id="school_logo">
<br>
<font class="school_name">Ehugbo Technical College Afikpo</font>

</div>

<!---header media div ends here------>


<!----navigation menu starts here------>

<div id="admin_nav">

<?php
//all code here controls register admin button....
if(@$_SESSION['reg_admin']=='enabled'){?>
<a href="register_admin.php"><button class="fun_buttons">Register Admin</button></a>
<?php
}
else{
	
}
?>


<?php
//all code here controls manage_admin buttons....
if(@$_SESSION['man_admin']=='enabled'){?>
<a href="manage_admin.php"><button class="fun_buttons">Manage Admins</button></a>
<?php
}
else{
	
}
?>


<?php
//all code here controls register students buttons....

if(@$_SESSION['reg_std']=='enabled'){?>
<a href="register_student.php"><button class="fun_buttons">Register Student</button></a>
<?php
}
else{
	
}
?>


<?php
//all code here controls manage student button....

if(@$_SESSION['man_std']=='enabled'){?>
<a href="manage_student.php"><button class="fun_buttons">Manage Students</button></a>
<?php
}
else{
	
}
?>



<?php
//all code here controls payment buttons.....

if(@$_SESSION['man_pay']=='enabled'){?>
<a href="manage_payment.php"><button class="fun_buttons">Manage Payment</button></a>
<?php
}
else{
	
}
?>


<?php
//all code here controls pin generation buttons...

if(@$_SESSION['gen_pin']=='enabled'){?>
<a href="generate_pin.php"><button class="fun_buttons">Generate Pin</button></a>
<?php
}
else{
	
}
?>


<?php
//all code here controls result buttons...

if(@$_SESSION['result']=='enabled'){?>
<a href="upload_result.php"><button class="fun_buttons">Upload Results</button></a>

<a href="terminal_result_gen.php"><button class="fun_buttons">Terminal Generation</button></a>

<a href="terminal_position_gen.php"><button class="fun_buttons">Terminal Position Subject</button></a>

<a href="annual_result_gen.php"><button class="fun_buttons">Annual Generation</button></a>

<a href="annual_final_page.php"><button class="fun_buttons">Annual Final</button></a>

<a href="annual_position_sub.php"><button class="fun_buttons">Annual Position Subject</button></a>
<?php
}
else{
	
}
?>


<a href="print_all_form.php"><button class="fun_buttons">Print Results</button></a>

<button class="fun_buttons">Messages</button>

<button class="fun_buttons">Update slide</button>

<button class="fun_buttons">Lock Screen</button>

<a href="logout.php"><button class="fun_buttons" onclick="return(log())">Logout</button></a>




</div>

<script>

function log(){
	
var a=confirm("Are you sure you want to logout");

if(a==true){
	
	return true;
	
}

else{
	
	return false;
	
}

return a;


}

</script>





</body>
</html>
