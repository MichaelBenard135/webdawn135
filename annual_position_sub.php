<?php
require("admin_college.php");
?>


<div class="manage_admin_div">




<!---------result details input--------------->

<div class="result_div">

<div>

<font class="result_header">Annual Position-Subject-Generation</font>
<br>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

<table width="94%" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<br>

<tr>
<td>
<label class="label">Class</label>

<select id="select_term" name="claps" required>
<option>Select Class</option>
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
<label class="label">Session</label>
<input type="text" 
placeholder="<?php echo date("Y")-1;?>/<?php echo date("Y");?>" 
id="result_details" name="sess" required>
</td>
</tr>


<tr>
<td>
<input type="submit" value="Generate" id="submit_button" name="sub">
</td>
</tr>


<tr>
<td>

<?php
if(isset($_GET['erro'])){
	
	echo '<font color=green>'.$_GET['erro'].'<font>';
	
}

elseif(isset($_GET['error'])){
	
	echo '<font color=red>'.$_GET['error'].'<font>';
	
}
?>
</font>
</td>
</tr>
</table>

</form>

</div>



</div>



<!----foooter div------->

<div class="footer">

<font class="foot_font"> Ehugbo Technical College  &copy<?php echo date("Y");?> All Right Reserved </font>
</div>


</div>

<?php

//form action for position generation...

require '../backend/annual_sub_pos.php';

?>
