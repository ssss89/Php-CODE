<?php
//echo "category page";
include "conn.php"; include "head.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Category page</title>
	<style>
		.ab{
margin-top: 10px; padding: 0;border: 2px solid black;border-radius:5px ;
height: 600px;background-color: skyblue;
		} .search{
			width: 600px;
			margin: auto;
			margin-top: 50px;
		} .sb{
			margin: 10px;padding: 0;
			height: 40px;width: 500px;
		} .sb:hover{
			background-color: ;color: ;
		}.abc{
			height: 150px;
		}
	</style>
</head>
<body>
	<div class="ab">
	<div class="abc"><ul>
			<li><a href="category.php">Category Page</a></li>
			<li><a href="update-category.php">Category Update</a></li>
			<li><a href="add-category.php">Category Add New</a></li>
		</ul></div>
	
		
		
<div class="search">
	<form action="" method="Post">
		<input type="text" name="searchitem" class="sb" placeholder="serach your category"> 
		<input type="submit" value="Search" name="Searchclick">

	</form>
</div>


	</div>
</body>
</html>