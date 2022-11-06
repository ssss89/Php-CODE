<?php 
include "head.php";
include "conn.php";
//echo "hello";
//session_start();

//print_r($_SESSION["user"]);

//print_r($_SESSION['username']); echo "<br>";
//print_r($_SESSION['email']); echo "<br>";
//print_r($_SESSION['id']);  echo "<br>";

$g = $_SESSION['shivansh'];
$g1 = $_SESSION['uid'];
print_r("<h2>". $g. "</h2>");
print_r("<h2>". $g1. "</h2>");






?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Main page</title>
	<style>
		.co{
			margin: 0;padding: 0;
			width: 100%;height: 700px;
			border: 2px solid black;
		}.slide{
			width: 200px;
			border: 2px solid red;
			height: 100%;
			float: left;

		} .content{
			width: 85%;
			border: 2px solid red;
			height: 100%;
			float: right;
		}

		.ul{
        margin: 20px;padding: 20px;
        height: 100px;


    } .ul li{
        
        display:block ;
        height: 100%;
        width:100%;
        border: 2px solid black;
        border-radius: 10px;
        background-color: ;
        float: left;
        margin: 10px 0;
    } .ul a{
        text-decoration: none;
        align-items: center;

        justify-content: center;
        font-size: 15px;
        color: black;
    } button{
        float: right;
        clear: left;
        clear: right;
        position: relative;
    } .log{
    	margin: 8px;
    	padding: px;
    }
	</style>
</head>
<body>
	<div class="co">
		<div class="slide">
			<ul class="ul">
			<li><a href="main.php" class="log">Home</a></li>
			<li><a href="about.php" class="log">About</a></li>
			<li><a href="Post.php" class="log">Post</a></li>
			<li><a href="contact.php" class="log">Contact Us</a></li>
			<li><a href="changeimg.php" class="log"> Brand Logo</a></li>
			<li><a href="logout.php" class="btn btn-primary 
				log">Log Out</a></li>
		</ul></div>
		<div class="content"><h1>hello</h1></div>
		
	</div>

</body>
</html>