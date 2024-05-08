<!DOCTYPE html>
<html lang="en">
     <?php include("./dbcon.php");?>
<head>

    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.header
{
width:100%;
background-color:rgba(0,0,0,.3);

}
.header ul 
{
text-align:center;

}
.header ul li
{
list-style:none;
display:inline-block;
}
.header ul li a
{
display:block;
text-decoration:none;
color:#fff;
letter-spacing:2px;
font-weight:600px;
padding:25px;
transition:all ease 0.5s;

}
.header ul li a:hover
{
background-color:#800085;

}


        .b1
{
	width:100%;
	background:linear-gradient(to top,rgba(0,0,0,0.1)50%,rgba(0,0,0,0.1)50%),url("p2.JPG");
	height:100vh; 
}
.loginbox
{
	position: absolute;
	top:60%;
	left:50%;
	transform:translate(-50%,-50%);
	width:400px;
	height:400px;
	background: transparent;
	border-radius:10px;
	padding:0 20px 0;
	border:2px solid #800085;
}
.loginbox h1
{
margin-top:-5px;
    font-size:50px;
	text-align: center;
	color: #800085;
	padding: 0 20px 0;	
}

.loginbox p
{


margin: 0;
padding:0;
font-weight:bold;
color:#800085;
}
.loginbox input{
	width:100%;
	margin-bottom:20px;

}
.loginbox input[type="text"],input[type="password"]
{
	border:none;
	border-bottom:1px solid #800085;
	background:transparent;
	outline:none;
	height:40px;
}

.loginbox input[type="submit"]
{
	align:center;
	float:right;
border:none;
outline:1px solid #800085 ;
height:40px;
width:100px;
background:#800085;
color:white;
font-size:18px;
border-radius:20px;
}

.loginbox input[type="submit"]:hover
{
	align:center;
	float:right;
border:none;
outline:1px solid #800085 ;
height:40px;
width:100px;
background:transparent;
color:#800085;
font-size:18px;
border-radius:20px;
}
    </style>
   
</head>
<body class="b1">
    
   
    <div class="header">
     <ul>
         <li><a href="index.php">HOME</a></li>
         <li><a href="about.php">ABOUT</a></li>
         <li><a href="contact.php">CONTACT</a></li>
         <li><a href="admin.php">ADMIN</a></li>
    </ul>
 </div>


<div class="loginbox">
<h1 >login</h1>
<form    method="post" action="./script.php">

<p > username</p>
<input type="text" required name="username">

<p> password</p>
<input type="password"required  name="password">

<input type="submit" name="login" value="Login">

</form>
</div>
</body>
</html>