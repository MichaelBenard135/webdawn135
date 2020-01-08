<?php
require("admin_college.php");
?>



<!DOCTYPE html>
<html>
<head>
<title>Pin-Generate</title>
<meta charset="utf-8">
<meta name="viewport" content="device=device-width,initial scale=1.0">

<!----link goes here------>
<link rel="stylesheet" href="../student/tech.css" media="all" type="text/css">
<link rel="shortcut icon" href="../file/slogo.jpg">
<head>

<body>


<div class="manage_admin_div">


<!---header content ends here------>


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

<font class="result_header">Generate pin</font>
<br>

<form method="post" action="<?php echo htmlspecialchars('gen_pins.php')?>" >

<table width="94%" align="center" border="0" cellspacing="0" cellpadding="0">


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
<br>
<label class="label">No of pin to generate</label>
<input type="text" placeholder="No of pins" class="result_details" name="nums" required>
</td>
</tr>

<tr>
<td>
<input type="submit" value="Generate" id="submit_button">
</td>
</tr>

</table>

</form>

</div>

</div>


</div>


</body>
</html>
