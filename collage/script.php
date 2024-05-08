
<?php
/////////////////////////////
include("./dbcon.php");

// user table
if(isset($_POST['login']))
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query="select * from user where username='$username' and password='$password'";
	
	$res=mysqli_query($con,$query);
	
	if(mysqli_num_rows($res)>0)
	{
		
		header("location:boosky/boosky.php");
	}
	else
	{
		echo "<br>failed to login";
	}
	
}

