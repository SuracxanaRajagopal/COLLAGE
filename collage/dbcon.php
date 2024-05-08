<?php

$con=mysqli_connect("localhost","root","","school");

if($con==false)
{
	die("error:connection failed".mysqli_error());
}
else
{
	//echo "database connection success";
}
?>