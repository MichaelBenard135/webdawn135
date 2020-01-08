<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	
require '../backend/connect.php';

require 'admin_college.php';

//
function pins(){
	
	$length="10";
	$chars="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$pin="";
	
	for($i=0;$i<$length;$i++){
		
	@$pin.=$chars[mt_rand(0,strlen($chars))];
	
	}
	
	return $pin;
	
}

$numb=@$_POST['nums'];

for($a=0;$a<$numb;$a++){
	

$show=pins();


//code here insert all pin into db......
$insert=$con->query("INSERT INTO pin_gen(
pins,
pin_session
)

VALUES(
'$show',
'$_POST[sess]'

)");


}




$select_pin=$con->query("select * from pin_gen where printed=''");



function uprint(){
	
	require '../backend/connect.php';
	
$update=$con->query("update pin_gen set printed='printed' where printed=''");
	
}

echo uprint();

?>

<!doctype html>
<html>
<head>
<title>Brush-Sheet Result</title>
<link rel="stylesheet" href="../student/tech.css" type="text/css" media="all">
<link rel="shortcut icon" href="../file/slogo.jpg">

</head>

<body>

<div id="brusha">

<div>


<table align="center"  cellpadding="0" cellspacing="0" id="top">
<caption><b>Students Pin for <?php echo @$_POST['sess'];?></b></caption>
<tr>
<th>S/N</th><th>Pins</th><th>Session</th>
</tr>
<?php
$sn=1;
while($row=mysqli_fetch_assoc($select_pin)){?>
<tr align="center">
<td><?php echo $sn++;?></td>
<td><?php echo $row["pins"];?></td>
<td><?php echo $row["pin_session"];?></td>
</tr>

<?php
}
?>

</table>



<table width="100%" border="0">

<tr align="center">
<td><input type="button" value="print" onclick="return(printa())" id="but"></td>
</tr>

</table>

<style>

@media print{
	
	@page{
		
		size:portrait;
		
	}
	
#but{
   display:none;

}	


#top{
	border:0px solid gray;
	width:80%;
	margin-top:4%;
	padding:10px;
	
}



#top tr td{
	padding:7px;
	border-bottom:1px solid gray;
}



#top tr:nth-child(odd){

	
	background-color:rgba(192,192,192,0.4);
}

#top th{
	margin-top:10%;
	padding:10px;
	background-color:lightgray;
	color:white;
	
	
}	
	
	
	
}

</style>



</div>

</div>
<?php

}

else{
	
	header("location:generate_pin.php");
	
}
?>

 
<script>

function printa(){
	
var content=document.getElementById('brusha');

var printo=window.open('','','width=1000,height=700');

printo.document.write(content.innerHTML);

printo.document.close();

printo.focus();

printo.print();

printo.close();

window.close();

}

</script>




