<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log In Buyer</title>
	<link rel="stylesheet" href="css/signup.css">
</head>
<body>
<?php

include "conn.php";
if(isset($_POST['login'])){

	$user = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);

	$sql = "SELECT * FROM signup WHERE username ='{$user}' AND password = '{$password}' ";

	$res = mysqli_query($conn, $sql);

	if($res == true){

		while ($row =  mysqli_fetch_assoc($res)) {
			// code...
			session_start();
			$_SESSION["user"] = $row['username'];


			

		}
		header("location:main.php");
		
			print_r($_SESSION["user"]);
		

	}else{
		header("location:signup.php");
	}
}

?>

	<div class="a">
		<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
			<label for="" class="d">Username</label>
			<input type="text" class="b" name="username">
			<label for="" class="d">password</label><input type="password" class= "b" name="password">
			<input type="submit" value="login" class="c" name="login">
		</form>
		<div class="f">forget password 
		<button><a href="forget.php"> forget</a></button>

		</div>
		<div class="s">
			register for new user
			<button><a href="signup.php">Signup here</a></button>
		</div>
	</div>
</body>
</html>