<?php
require("admin_college.php");
?>



<!DOCTYPE html>
<html>
<head>
<title>Print-result</title>
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




<!---------result details input for terminal--------------->

<div class="result_div">

<div>

<font class="result_header">Print Terminal-Result</font>
<br>

<form method="post" action="<?php echo htmlspecialchars('../backend/print_all_terminal.php')?>" target="_blank" >

<table width="94%" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<label class="label">Term</label>

<select id="select_term" name="term" required>
<option>Select Term</option>
<?php
//code here selects all term avaliable.....
require '../backend/connect.php';

$select=$con->query("select DISTINCT(term) as terma from terminal");
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

$select=$con->query("select DISTINCT(class) as clasa from terminal");
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

$select=$con->query("select DISTINCT(sections) as sessa from terminal");
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
<input type="submit" value="Print" id="submit_button" name="sub">
</td>
</tr>

</table>

</form>

</div>


</div>



<!------------html input for annual result----------->


<div class="result_div">

<div>

<font class="result_header">Print Annual-Result</font>
<br>

<form method="post" action="<?php echo htmlspecialchars('../backend/print_all_annual.php')?>" target="_blank" " >

<table width="94%" align="center" border="0" cellspacing="0" cellpadding="0">

<tr>
<td>
<label class="label">Class</label>

<select id="select_term" name="claps" required>
<option>Select class</option>
<?php
//code here selects all class avaliable avaliable.....

$select=$con->query("select DISTINCT(class) as clasa from annual");
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

$select=$con->query("select DISTINCT(session_term) as sessa from annual");
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
<input type="submit" value="Print" id="submit_button" name="sub">
</td>
</tr>

</table>

</form>

</div>


</div>




<div class="result_div">

<div>

<font class="result_header">Print-Terminal-Brush Sheet</font>
<br>

<form method="post" action="<?php echo htmlspecialchars('../backend/print_brushsheet_terminal.php')?>" target="_blank">

<table width="94%" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<label class="label">Term</label>

<select id="select_term" name="term" required>
<option>Select Term</option>
<?php
//code here selects all term avaliable.....
require '../backend/connect.php';

$select=$con->query("select DISTINCT(term) as terma from terminal");
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

$select=$con->query("select DISTINCT(class) as clasa from terminal");
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

$select=$con->query("select DISTINCT(sections) as sessa from terminal");
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
<input type="submit" value="Print" id="submit_button" name="sup">
</td>
</tr>

</table>

</form>

</div>


</div>





<div class="result_div">

<div>

<font class="result_header">Print-Annual-Brush Sheet</font>
<br>

<form method="post" action="<?php echo htmlspecialchars('../backend/print_brushsheet_annual.php')?>" target="_blank">

<table width="94%" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<label class="label">Class</label>

<select id="select_term" name="claps" required>
<option>Select class</option>
<?php
//code here selects all class avaliable avaliable.....

$select=$con->query("select DISTINCT(class) as clasa from terminal");
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

$select=$con->query("select DISTINCT(sections) as sessa from terminal");
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
<input type="submit" value="Print" id="submit_button" name="sup">
</td>
</tr>

</table>

</form>

</div>


</div>

</div>


</body>
</html>
