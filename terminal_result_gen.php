<?php
require("admin_college.php");
?>


<div class="manage_admin_div">





<!-----------header media content------->
<div class="media_header_div">

<div class="nav_bar">Nav</div>

<img src="..\file/slogo.jpg" id="school_logo">
<br>
<font class="school_name">Ehugbo Technical College Afikpo</font>

</div>

<!---header media div ends here------>




<!---------result details input--------------->

<div class="result_div">

<div>

<font class="result_header">Terminal Result-Generation</font>
<br>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

<table width="94%" align="center" border="0" cellspacing="0" cellpadding="4">
<tr>
<td>

<label class="label">Term</label>

<select id="select_term" name="term" required>
<option>Select Term</option>
<?php
//code here selects all term avaliable.....
require '../backend/connect.php';

$select=$con->query("select DISTINCT(term) as terma from result");
while($row=mysqli_fetch_assoc($select)){?>
<option><?php echo $row["terma"];?></option>

<?php
}
?>
</select>


</td>
</tr>



<tr>
<td>
<label class="label">Class</label>

<select id="select_term" name="claps" required>
<option>Select class</option>
<?php
//code here selects all class avaliable avaliable.....

$select=$con->query("select DISTINCT(class) as clasa from result");
while($row=mysqli_fetch_assoc($select)){?>
<option><?php echo $row["clasa"];?></option>

<?php
}
?>
</select>

</td>
</tr>

<tr>
<td>
<label class="label">Session</label>

<select id="select_term" name="sess" required>
<option>Select Session</option>
<?php
//code here selects all class avaliable avaliable.....

$select=$con->query("select DISTINCT(session_term) as sessa from result");
while($row=mysqli_fetch_assoc($select)){?>
<option><?php echo $row["sessa"];?></option>

<?php
}
?>
</select>
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
require '../backend/terminal_final.php';

?>
