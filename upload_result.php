<?php
require("admin_college.php");
?>


<div class="manage_admin_div">



<!---------result details input--------------->

<div class="result_div">

<div>

<font class="result_header">Result-Upload</font>
<br>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

<table width="94%" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<br>
<label class="label">Name</label>
<input type="text" placeholder="Students Name" class="result_details" name="name" required>
</td>
</tr>


<tr>
<td>
<br>
<label class="label">Reg No</label>
<input type="text" placeholder="Reg No" class="result_details" name="regno" required>
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
<select id="select_term" name="term" required>
<option>class</option>
<option>Jss1</option>
<option>Jss2</option>
<option>Jss3</option>
<option>SSS1</option>
<option>SSS2</option>
<option>SSS3</option>
</select>
</td>
</tr>


<tr>
<td>
<label class="label">Subject</label>
<select id="select_term" name="subject" required>
<option>Select Subject</option>
<option>English</option>
<option>Mathematics</option>
<option>Physics</option>
<option>Chemistry</option>
<option>Biology</option>
<option>Agric</option>
<option>Computer</option>
<option>Economics</option>
<option>Civic</option>
</select>
</td>
</tr>



<tr>
<td>
<br>
<label class="label">First assesment</label>
<input type="text" placeholder="10" class="result_details" name="first" required>
</td>
</tr>


<tr>
<td>
<br>
<label class="label">Second assesment</label>
<input type="text" placeholder="10" class="result_details" name="second" required>
</td>
</tr>


<tr>
<td>
<br>
<label class="label">Third assesment</label>
<input type="text" placeholder="10" class="result_details" name="third" required>
</td>
</tr>


<tr>
<td>
<br>
<label class="label">Exam</label>
<input type="text" placeholder="70" class="result_details" name="exam" required>
</td>
</tr>


<tr>
<td>
<input type="submit" value="Upload" id="submit_button"  name="sub">
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
//require code for form action...
require '../backend/student_action.php';

?>



