<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/css.css">
	<style>
		.rh{
			width: 30%;
			margin: auto;

		}

.fo input:hover{
			background: blue;
			height:30px;
			font-size: 15px;
		}
		.rh:hover{
			width: 30%;
			margin: auto;
			background: blue;
			color: white;
			font-size: 19px;
		}

	</style>
</head>
<body>
	<div class="signuppage">
		<h1>Register Here</h1>
		<div class="signupform">
	<form action="signupdata.php" method="POST" 
		 enctype="multipart/form-data" class="fo">
<div class="form-group">
	<label for="">Name</label>
		 <input type="text" name="Name">
</div>
<div class="form-group">
	<label for="">Sirname</label>
		 <input type="text" name="sirname">
</div>
<div class="form-group">
	<label for="">Username</label>
		 <input type="text" name="username">
</div>
<div class="form-group">
	<label for="">Password</label>
		 <input type="password" name="password">
</div>
<div class="form-group">
	<label for="">profile Pic</label>
 <input type="file" name="propic">
</div>
<br>
<input type="Submit" name="register" value="sign up" class="rh">
		 
		
	</form>
		</div>
	</div>
	<script>
		//setInterval(f,1000);
		function f(){
location.reload();
		};
	</script>
</body>
</html>