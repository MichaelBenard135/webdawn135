<?php
//required admin page....
require 'admin_college.php';

?>


<div class="manage_admin_div">


<!--div holding registration values--->

<div class="register_div">

<div>
<font class="register_header">Staff Registration</font>
<br>

<!---form for registration of admin---->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">

<table width="94%" align="center" border="0">

<th align="left">Personal Information</th>
<tr>
<td>
<input type="text" placeholder="name" name="name" required>
</td>
</tr>


<tr>
<td>
<input type="text" placeholder="phone" name="phone" required>
</td>
</tr>


<tr>
<td>
<input type="password" placeholder="password" name="pass" required>
</td>
</tr>


<tr>
<td>
<input type="text" placeholder="class" name="class" required>
</td>
</tr>


<tr>
<td>
<input type="text" placeholder="subject" name="subject" required>
</td>
</tr>
</table>


<!-------table form for assigning functions------->

<table width="100%" align="center" border="0" cellpadding="5" cellspacing="0">

<th colspan="2">Assign Functions</th>

<tr align="left">
<td>
<th>Administrative functions</th>
</td>
</tr>

<tr>
<td align="right">
<input type="checkbox" name="regad" value="enabled"></td>
<td align="left">Register Admin</td>
</tr>

<tr>
<td align="right">
<input type="checkbox" name="mad" value="enabled"></td>
<td align="left">Manage Admin</td>
</tr>

<tr>
<td align="right">
<input type="checkbox" name="manp" value="enabled"></td>
<td align="left">Manage Payment</td>
</tr>


<tr align="left">
<td>
<th>Students Management</th>
</td>
</tr>

<tr>
<td align="right">
<input type="checkbox" name="regstd" value="enabled"></td>
<td align="left">Register students</td>
</tr>


<tr>
<td align="right">
<input type="checkbox" name="vwstd" value="enabled"></td>
<td align="left">View Students</td>
</tr>

<tr>
<td align="right"><input type="checkbox" name="magstd" value="enabled"></td>
<td align="left">Manage Student</td>
</tr>





<tr align="left">
<td>
<th>Result Management</th>
</td>
</tr>

<tr>
<td align="right">
<input type="checkbox" name="genp" value="enabled"></td>
<td align="left">Generate Pin</td>
</tr>

<tr>
<td align="right">
<input type="checkbox" name="r_mana" value="enabled"></td>
<td align="left">Manage Result</td>
</tr>

<tr align="left">
<td></td>

<td colspan="2">
<ul>
<li>Upload of result</li>
<li>Terminal Generation</li>
<li>Terminal Position for subject</li>
<li>Annual Generation</li>
<li>Annual Final</li>
<li>Annual Final</li>
</ul>
</td>


</tr>

<tr>
<td align="right">
<input type="checkbox" name="presult" value="enabled">
</td>
<td align="left">Print Result</td>
</tr>

<tr>
<td align="right">
<input type="checkbox" name="upsld" value="enabled"></td>
<td align="left">Update Slide</td>
</tr>

<tr> 
<td colspan="2"><input type="submit" value="Register" id="submit_button" name="sub"></td>
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
//code here requires form action
require '../backend/student_action.php';

?>

</body>
</html>