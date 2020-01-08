<?php
require("admin_college.php");
?>


<div class="manage_admin_div">




<!---------result details input--------------->

<div class="result_div">

<div>

<font class="result_header">Payment-Update</font>
<br>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

<table width="94%" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<br>
<label class="label">Student Name</label>
<input type="text" placeholder="Student's Name" class="result_details" name="name" required>
</td>
</tr>

<tr>
<td>
<label class="label">Term</label>

<select id="select_term" name="select_term" required>
<option>Select Term</option>
<option>First Term</option>
<option>Second Term</option>
<option>Third Term</option>
</select>

</td>
</tr>

<tr>
<td>
<label class="label">Session</label>
<input type="text" placeholder="<?php echo date("Y")-1;?>/<?php echo date("Y");?>" class="result_details" 
name="sess" required>
</td>
</tr>

<tr>
<td>
<label class="label">Class</label>
<select id="select_term" name="class" required>
<option>class</option>
<option>jss1</option>
<option>jss2</option>
<option>jss3</option>
</select>
</td>
</tr>


<tr>
<td>
<br>
<label class="label">School Fees</label>
<input type="text" placeholder="Payable Amount" class="result_details" name="schf" required>
</td>
</tr>

<tr>
<td>
<br>
<label class="label">Amount Paid</label>
<input type="text" placeholder="Amount Paid" class="result_details" name="amtp" required>
</td>
</tr>


<tr>
<td>
<br>
<label class="label">Balance</label>
<input type="text" placeholder="Balance" class="result_details" name="bal" required>
</td>
</tr>


<tr>
<td>
<input type="submit" value="Update" id="submit_button" name="sub">
</td>
</tr>

</table>

</form>

</div>



</div>



<div class="footer">

<font class="foot_font"> Ehugbo Technical College  &copy<?php echo date("Y");?> All Right Reserved </font>
</div>


</div>



<?php
//code to be used for form action.....

require '../backend/student_action.php';
?>


