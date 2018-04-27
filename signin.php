<?php
session_start();
include('connect.php');
$name=$_POST['name'];
$id=$_POST['id'];
$section=$_POST['section'];
$cgpa=$_POST['cgpa'];
$q="INSERT INTO users (name,id,section,cgpa)VALUES ('$name', '$id', '$section','$cgpa');";
$query = mysqli_query($dbh,$q)or die('error');
 mysqli_close($dbh);
echo "Thank you";

