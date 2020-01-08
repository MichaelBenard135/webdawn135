<?php
require("admin_college.php");
?>

<div class="manage_admin_div">


<div class="register_div">

<div>
<font class="register_header">Students Registration</font>
<br>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">

<table width="94%" align="center" border="0">
<br>
<br>
<th align="left">Students Personal information</th>
<tr>
<td>
<input type="text" placeholder="surname" name="sname" required>
</td>
</tr>

<tr>
<td>
<input type="text" placeholder="middle name" name="mname" required>
</td>
</tr>

<tr>
<td>
<input type="text" placeholder="last name" name="lname" required>
</td>
</tr>


<tr>
<td>
<input type="text" placeholder="age" name="age" required>
</td>
</tr>

<tr>
<td>
<input type="radio" name="sex" value="male" required>Male
<input type="radio" name="sex" value="female" required>Female
</td>
</tr>

<tr>
<td>
<input type="text" placeholder="country" name="country" required>
</td>
</tr>


<tr>
<td>
<input type="text" placeholder="state" name="state" required>
</td>
</tr>


<tr>
<td>
<input type="text" placeholder="Local Government" name="lga" required>
</td>
</tr>


<tr>
<td>
<select class="select_class" name="class">
<option>Select class</option>
<option>Jss1</option>
<option>Jss2</option>
<option>Jss3</option>
<option>Sss1</option>
<option>Sss2</option>
<option>Sss3</option>
</select>
</td>
</tr>


<th align="left">Parents/Guardians information</th>
<tr>
<td>
<input type="text" placeholder="Parents/Guardians name" name="gname" required>
</td>
</tr>

<tr>
<td>
<input type="text" placeholder="occupation" name="occup" required>
</td>
</tr>


<tr>
<td>
<input type="text" placeholder="phone number" name="phone" required>
</td>
</tr>

<tr>
<td>
<textarea placeholder="Enter your address" class="regtext" name="addr" required></textarea>
</td>
</tr>

<tr>
<td>
<input type="submit" value="submit" id="submit_button" name="sub">
</td>
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

<?php
//php code requires regsiter form action......

require '../backend/student_action.php';

?>


</body>
</html>