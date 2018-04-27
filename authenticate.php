<?php
session_start();

include 'connect.php';
$username=$_POST['username'];
$password=$_POST['password'];

$query="select *from login where name='$username'";
$result=mysqli_query($dbh,$query) or die("error querying database");
 


if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) ){


 
{
    if(($username==$username) && ($password==$password) )
{
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC));
           {
            if($row['password']==$password)
              {
                $_SESSION['secton']=$row['section'];

                   header('location:ajax.html');
              }
             else
              {

              header('location:login.html');
               }
            }

            echo '<br>login successfull';

				}
       else
            {
           echo '<br>login unsuccessfull';
	    }

else{
			echo "<br>Connot be left empty!";
			}

}
if (isset($_SESSION['voted']))
{
    $_SESSION['voted'] = 0;
}

if($_POST['submit'])
{
    echo $_SESSION['myVariable'] +1;  
}

?>
