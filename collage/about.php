<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: sans-serif;
        }
      
        .heading{
            text-align: center;
            margin-top: 25px;

        }
        .heading h1
        {
            font-size: 50px;
            color:#800085 ;
            margin-bottom: 10px;
        }
        .heading p{
            font-size: 20px;
            color: #666;
            margin-bottom: 50px;
        }
        .aboutus
        {
            display: flex;
            align-items: center;
            width: 85%;
            margin: auto;
        }
        .aboutus img{
            flex: 0 50%;
            max-width: 50%;
            height: auto;
        }
        .content
        {
            padding:35px;
        }
        .content h2{
color:#800085;

font-size:24px;
margin:15px 0px;

        }
        .content p{
            color:#666;
            font-size:18px;
            line-height:1.5;
            margin:15px 0px;
        }
        .read{
            display: inline-block;
            color:#fff;
            background-color:#800085;
            border:none;
            padding:12px 20px;
            border-radius:5px;
            font-size:18px;
            cursor:pointer;
            transition:0.2s ease;
        }
        .read:hover
        {
            background-color:rgba(162, 161, 160, 0.62);
        }

      
        .b1
{
	width:100%;
	background:linear-gradient(to top,rgba(0,0,0,0.1)50%,rgba(0,0,0,0.1)50%),url("p2.JPG");
	
	background-position:center;
	background-size:cover;
	height:100vh;
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
    <div class="heading">
        <h1>About us</h1>
        <p>Lorem ipsum dolor, sit amet consectetur 
            adipisicing elit. 
            
        </p>
    </div>
    <section class="aboutus">
        <img src="u7.JPG">
        <div class="content">
            <h2>Lorem ipsum dolor sit, amet</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem pariatur iure corrupti itaque deleniti cum sed fugiat perspiciatis eveniet. Esse suscipit debitis, iusto expedita dolorem beatae nam maiores sunt dolor.

            </p>
            <button class="read">Read More</button>
        </div>
    </section>
</body>
</html>