<?php
require("admin_college.php");
?>


<div class="manage_admin_div">




<!---------result details input--------------->

<div class="result_div">

<div>

<font class="result_header">Annual Result-Generation</font>
<br>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

<table width="94%" align="center" border="0" cellspacing="0" cellpadding="10">
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


<tr align="center">
<td>

<?php
if(isset($_GET['erro'])){
	
	echo '<font color=green>'.$_GET['erro'].'<font>';
	
}

elseif(isset($_GET['error'])){
	
	echo '<font color=red>'.$_GET['error'].'<font>';
	
}
?>

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

//backend code for terminal result geneartion....
require '../backend/annual_generation.php';

?>
