<?php
//required admin page....
require("admin_college.php");

//connection code...
require '../backend/connect.php';

if(isset($_GET['id'])){
	
//code here select a unique user...
$select=$con->query("SELECT * FROM staffs WHERE id='".$_GET['id']."' ");
$row=mysqli_fetch_assoc($select);

}

else{
	
	header("location:manage_admin.php");
	
}
?>


<!--div holding registration values--->

<div class="manage_admin_div">

<div class="register_div">

<div>
<font class="register_header">Unassign functions</font>
<br>


<!----------table for admin admission----->

<table width="94%" align="center" border="0">

<th align="left">Personal Information</th>

<tr>
<td>
<input type="text" value="<?php echo $row["name"];?>">
</td>
</tr>


<tr>
<td>
<input type="text" value="<?php echo $row["phone"];?>">
</td>
</tr>



<tr>
<td>
<input type="text" value="<?php echo $row["class"];?>">
</td>
</tr>


<tr>
<td>
<input type="text" value="<?php echo $row["subject"];?>">
</td>
</tr>




<th colspan="2">Avaliable functions</th>

<?php 
if($row["register_admin"]=='enabled'){?>
<tr>
<td align="left">Register Admin</td>
<tr>
<?php
}
else{
}
?>

<?php 
if($row["manage_admin"]=='enabled'){?>
<tr>
<td align="left">Manage Admin</td>
<tr>
<?php
}
else{
}
?>


<?php 
if($row["manage_payment"]=='enabled'){?>
<tr>
<td align="left">Manage payment</td>
<tr>
<?php
}
else{
	echo '';
}
?>


<?php 
if($row["register_students"]=='enabled'){?>
<tr>
<td align="left">Register Students</td>
<tr>
<?php
}
else{
	echo '';
}
?>

<?php 
if($row["view_students"]=='enabled'){?>
<tr>
<td align="left">View Students</td>
<tr>
<?php
}
else{
	echo '';
}
?>


<?php 
if($row["manage_students"]=='enabled'){?>
<tr>
<td align="left">Manage Student</td>
<tr>
<?php
}
else{
	echo '';
}
?>

<?php 
if($row["generate_pin"]=='enabled'){?>
<tr>
<td align="left">Generate Pin</td>
<tr>
<?php
}
else{
	echo '';
}
?>


<?php 
if($row["result_manage"]=='enabled'){?>
<tr>
<td align="left">Manage Result</td>
<tr>
<?php
}
else{
	echo '';
}
?>




<?php 
if($row["print_result"]=='enabled'){?>
<tr>
<tr>
<td align="left">Print Result</td>
<tr>
<?php
}
else{
	echo '';
}
?>


<?php 
if($row["update_slide"]=='enabled'){?>
<tr>
<tr>
<td align="left">Update Slide</td>
<tr>
<?php
}
else{
	echo '';
}
?>

</table>


<!---form for registration of admin---->
<form action="../backend/student_action.php" method="post">


<table width="100%" align="center" border="0">

<th colspan="2">Unassign Functions</th>

<tr align="left">
<td>
<th>Administrative functions</th>
</td>
</tr>

<tr>
<td align="right">
<input type="checkbox" name="rega" value="norg"></td>
<td align="left">Register Admin</td>
</tr>

<tr>
<td align="right">
<input type="checkbox" name="mad" value="noma"></td>
<td align="left">Manage Admin</td>
</tr>

<tr>
<td align="right">
<input type="checkbox" name="manp" value="nomp"></td>
<td align="left">Manage Payment</td>
</tr>


<tr align="left">
<td>
<th>Students Management</th>
</td>
</tr>

<tr>
<td align="right">
<input type="checkbox" name="regstd" value="nore"></td>
<td align="left">Register students</td>
</tr>


<tr>
<td align="right">
<input type="checkbox" name="vwstd" value="novw"></td>
<td align="left">View Students</td>
</tr>

<tr>
<td align="right"><input type="checkbox" name="magstd" value="noms"></td>
<td align="left">Manage Student</td>
</tr>





<tr align="left">
<td>
<th>Result Management</th>
</td>
</tr>

<tr>
<td align="right">
<input type="checkbox" name="genp" value="noge"></td>
<td align="left">Generate Pin</td>
</tr>

<tr>
<td align="right">
<input type="checkbox" name="magsub" value="nomb"></td>
<td align="left">Manage Subject</td>
</tr>

<tr>
<td align="right">
<input type="checkbox" name="result" value="nors"></td>
<td align="left">Upload Result</td>
</tr>

<tr>
<td align="right">
<input type="checkbox" name="presult" value="nopr">
</td>
<td align="left">Print Result</td>
</tr>

<tr>
<td align="right">
<input type="checkbox" name="upsld" value="noup"></td>
<td align="left">Update Slide</td>
</tr>

<tr>
<td align="right">
<input type="hidden" name="posta" value="<?php echo $row["id"];?>" ></td>
</tr>



<tr> 
<td colspan="2"><input type="submit" value="Unassign" id="submit_button" name="sub"></td>
</tr>

</table>

</form>




</div>

</div>




<!---footer div---->

<div class="footer">

<font class="foot_font"> Ehugbo Technical College  &copy<?php echo date("Y");?> All Right Reserved </font>
</div>

</div>

</body>
</html>