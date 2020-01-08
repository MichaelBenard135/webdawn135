<?php

//main home page code...........
require 'admin_college.php';

//connection codes.....
require '../backend/connect.php';

?>


<div class="manage_admin_dashboard">

<!--sub_main div------>

<div class="content_div_admin">


<!--main content--->
<div class="content_admin  greet_text">

<!--greeting------>
welcome <?php echo @$_SESSION['name'];?>
<br>
its  <?php echo date("l");?>
<br>
<q><?php
//code here is for interaction based on the week.......
$dat=date("D");
switch($dat){
	case "Mon":echo "the week starts today use the positive energy to make it a success";
	
	break;
	
	case "Tue":echo "its tuesday i like taking candy its my favourite how about you?";
	
	break;
	
	case "Wed":echo "ooh! i enjoy wednesdays because its the middle of the week do have nice time";
	
	break;
	
	case "Thu":echo "its thursday sorry i mean thors day i guess am wrong today";
	
	break;
	
	case "Fri":echo "its friday i like going for recreational activities what do u think ?";
	
	break;
	
	case "Sat":echo "am very mean about the week cause it always give birth to a new one";
	
	break;
	
	case "Sun":echo "remember the sabbath day and......i hope u went to church please dont say no!!";
	
	break;
	
	default:echo "i guess we have a problem now";
	
	
}
?>

</q>
<br>
Date:
<?php
echo date("d-m-Y");
?>

</div>



<div class="content_admin  greet_text">

Total no of students: <?php
//code here for counting number of students....
$selet=$con->query("select * from students");
$row=mysqli_num_rows($selet);
if($row>0){
	echo $row;
}

else{
	echo '';
}
?>
<br>

class with highest populations:
<?php
//code for checking higest populated class....
$selt=$con->query("select MAX(class)as clasa from students");
$rowa=mysqli_fetch_assoc($selt);
if($rowa>0){
$rowa["clasa"];

//code for showing numbers again	
$selnum=$con->query("select * from students where class='".$rowa["clasa"]."'");
$coun=mysqli_num_rows($selnum);
?>
<?php echo $rowa["clasa"]?>(<?php echo $coun;?>);

<?php

}

else{
	
	echo "";
	
}
?>

<br>

class with lowset population:
<?php
//code for checking higest populated class....
$selt=$con->query("select MIN(class)as clas from students");
$rowa=mysqli_fetch_assoc($selt);

if($rowa>0){
	
$rowa["clas"];

//code for showing numbers again	
$selnu=$con->query("select * from students where class='".$rowa["clas"]."'");
$cou=mysqli_num_rows($selnu);
?>
<?php echo $rowa["clas"]?>(<?php echo $cou;?>);

<?php
}

else{
	
	echo "";
}
?>
</div>
<!--main content ends here--->



</div>



<div class="content_div_admin">

<!--main content--->
<div class="content_admin greet_text">

No of registered staffs:
<?php
//code here is for checking number of registered staffs
$selsf=$con->query("select * from staffs");
echo $cousf=mysqli_num_rows($selsf);

?>
</div>


<div class="content_admin greet_text2">
Fail Percentage:
<?php
//code here is for checking failure percentage..
$fail=$con->query("select * from terminal where averg<40");
$couf=mysqli_num_rows($fail);
$shf=$couf/100;
?>(<?php echo $shf."%";?>)
<br>


Pass Percentage:
<?php
//code here is for checking pass percentage..
$pass=$con->query("select * from terminal where averg>40");
$coup=mysqli_num_rows($pass);
$shp=$coup/100;
?>(<?php echo $shp."%";?>)


<br>

<br>


highest annual average:
<?php
//code for checking highest average...

$high=$con->query("select DISTINCT(MAX(total))as totl from annual_final");
while($row=mysqli_fetch_assoc($high)){

if($row>0){
	
$row["totl"];

//code for select the details again.....
$higm=$con->query("select * from annual_final where total='".$row["totl"]."' ");
while($rowm=mysqli_fetch_assoc($higm)){

$rowm["reg_no"];

echo '<br>';
//code for selecting student name...
$selna=$con->query("select * from students where reg_no='".$rowm["reg_no"]."'");
$selname=mysqli_fetch_assoc($selna);

$name=$selname["surname"]." ".$selname["middle_name"]." ".$selname["last_name"]

?>
<?php echo $name ;?>  <?php echo $rowm["class"];?> (<?php echo round($rowm["averg"],2);?>)

<?php
}
}

}

?>

<br>

<br>

higest terminal average:
<?php
	
//code to check for terminal 
$higt=$con->query("select DISTINCT(MAX(total))as tot from terminal");
while($rowt=mysqli_fetch_assoc($higt)){

$rowt["tot"];

//code for select the details again.....
$higmt=$con->query("select * from terminal where total='".$rowt["tot"]."' ");
while($rowmt=mysqli_fetch_assoc($higmt)){

$rowmt["reg_no"];
	
	echo '<br>';

//code for selecting student name...
$selna=$con->query("select * from students where reg_no='".$rowmt["reg_no"]."'");
$selnam=mysqli_fetch_assoc($selna);

$nam=$selnam["surname"]." ".$selnam["middle_name"]." ".$selnam["last_name"]

?>
<?php echo $nam ;?>  <?php echo $rowmt["class"];?>  
<?php echo $rowmt["term"];?> (<?php echo round($rowmt["averg"],2);?>)

<?php
}

}
?>
</div>
<!--main content ends here--->


</div>




<div class="footer">

<font class="foot_font"> Ehugbo Technical College  &copy<?php echo date("Y");?> All Right Reserved </font>
</div>



</div>
