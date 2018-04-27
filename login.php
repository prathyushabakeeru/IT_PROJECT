<?php
session_start();
include('connect.php');
$username=$_POST['name'];
$password=$_POST['password'];
$query="select * from login where name='$username'";
$result=mysqli_query($dbh,$query) or die("error");


while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
if($row['password']==$password)
{
$_SESSION['section']=$row['section'];
header('Location:ajax.html');
}
else
header('Location:login.html');

}
?>

