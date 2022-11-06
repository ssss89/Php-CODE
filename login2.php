
<?php 
session_start();
if(isset($_SESSION['shivansh'])){
header("location:main.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
        .a{
            width:400px; margin:auto; margin-top:200px; margin-bottom:30px; 
            background-color:rgb(210,120,99);
        } .from-control{
            margin-bottom:20px;
            margin-right:30px;
        }#b{
            width:60%;
            
        }
    </style>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<?php  
include "conn.php";
if(isset($_POST['login'])){
	//echo "hello";
	$user = mysqli_real_escape_string($conn,$_POST['username']);
	$pass = mysqli_real_escape_string($conn,md5($_POST['password']));

$sql = "SELECT * FROM signup WHERE username = '{$user}' AND password= '{$pass}' ";
$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
	
	while ($row = mysqli_fetch_assoc($res)) {
		session_start();
		$_SESSION['shivansh'] = $row['username'];
		$_SESSION['uid'] = $row['id'];
		$_SESSION['urole'] = $row['role'];
		header("location:main.php");
	}

}else{
	echo "not found";
}

}

?>
	   <div class="a">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class= "from-control">

<input type="text" name="username" class= "from-control" placeholder=" username here" id="b">
<input type="text" name="password" class= "from-control" placeholder=" password here" id="b">
<input type="submit" name="login" value="log" class= "from-control" id="b">

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