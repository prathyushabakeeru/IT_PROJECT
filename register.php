<?php
session_start();
include('connect.php');
function newuser()
{
$name=$_POST['name'];
$id=$_POST['id'];
$sec=$_POST['section'];
$cgpa=$_POST['cgpa'];
$query="INSERT INTO candidate (name, id,section,cgpa) VALUES('$name', '$id', '$section',$cgpa)";
$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}
function SignUp()
{
if(!empty($_POST['name']))   
	$query = mysql_query("SELECT * FROM candidate WHERE name = '$_POST[name]' AND sec = '$_POST[section]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}

if(isset($_POST['submit']))
{
	SignUp();
}

?>

