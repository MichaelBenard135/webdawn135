<?php
//require connection code here....

require '../backend/connect.php';

//required admin page....
require("admin_college.php");

$select=$con->query("SELECT * FROM students");
?>


<div class="manage_student">
<b>Search by</b> <button class="select_button">Name</button> <button class="select_button">Category</button><br>

<!--table holding search method for manage students--->
<form action="" method="post">

<table align="center" width="35%" border="0" id="search_table">
<tr>
<td align="right">
<input type="search" placeholder="search student by name...." class="search">

<select class="search_category">
<option>search by category</option>
</select>

</td>

<td align="left">
<input type="submit" class="search_button" value="submit">
</td>
</tr>
</table>

</form>

</div>


<!--div holding registration values--->


<div class="manage_admin_div">

<table align="center" border="0" cellpadding="10" cellspacing="0" id="manage_table">
<tr>
<th>Student's Name</th><th>Class</th><th>Reg no</th><th>Country</th><th>State</th><th>L.G.A</th><th>full details</th>
</tr>
<?php
//code here select all students...
while($row=mysqli_fetch_assoc($select)){
	//name value adding all names
	$name=$row["surname"]." ".$row["middle_name"]." ".$row["last_name"];
	?>
	
<tr align="center">
<td><?php echo $name;?></td>
<td><?php echo $row["class"];?></td>
<td><?php echo $row["reg_no"];?></td>
<td><?php echo $row["country"];?></td>
<td><?php echo $row["state"];?></td>
<td><?php echo $row["lga"];?></td>
<td><button class="fun_but">full details</button></td>
</tr>

<?php
}
?>

</table>
</div>