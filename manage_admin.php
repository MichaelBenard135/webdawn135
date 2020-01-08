<?php
//required admin page....
require("admin_college.php");

//connection codes.....
require '../backend/connect.php';


//code here selects and display all admins...
$select=$con->query("SELECT * FROM staffs");
?>


<!--div holding registration values--->

<div class="manage_admin_div">

<?php
//code check if select is true...
if($select==true){?>
	
<table width="90%" align="center" border="0" cellpadding="10" cellspacing="0" id="manage_table">
<tr>
<th>S/n</th><th>Name</th><th>Phone</th><th>Class Handling</th><th>Subject Handling</th><th>Function</th>
</tr>

<?php
//code here selectt all using while...
while($row=mysqli_fetch_assoc($select)){?>

<tr align="center">
<td><?php echo $row["id"];?></td>
<td><?php echo $row["name"];?></td>
<td><?php echo $row["phone"];?></td>
<td><?php echo $row["class"];?></td>
<td><?php echo $row["subject"];?></td>
<td>
<a href="unassign_function.php?id=<?php echo $row["id"];?>">
<button class="fun_but">view functions</button>
</a>
</td>
</tr>

<?php
}

?>

</table>

<?php
}

else{
	echo '';
}
?>
</div>