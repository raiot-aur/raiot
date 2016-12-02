<?php 
//include('database.php');
include('config.php');
echo "<pre>";
print_r($_POST);
// create a variable
$Name=$_POST['InputName'];
$Enrol=$_POST['InputEnrol'];
$Interest=$_POST['InputIntrest'];
$Email=$_POST['InputEmail'];
$Contact=$_POST['InputContact'];
$Department=$_POST['InputDepartment'];
$Sem=$_POST['InputSem'];
$Project=$_POST['InputProject'];
$LinkedIn=$_POST['InputLinkedIn'];
$CV=$_POST['InputCV'];
 
$q=mysqli_query($link,"INSERT INTO register(name,enroll,interest,email,contact,dept,sem,project,linkedin,cv) VALUES('$Name','$Enrol','$Interest','$Email','$Contact','$Department','$Sem','$Project','$LinkedIn','$CV')");
if($q)
{
	echo "true";
}
else
{
	echo "false";
	echo mysqli_error($link);
}

?>