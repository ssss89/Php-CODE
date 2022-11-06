<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/signup.css">
	<style>
		
	</style>
</head>
<body>
<?php 

include "conn.php";

if(isset($_POST['signup'])){
	//echo "ggg";
	if(isset($_FILES['avtar'])){

	$file_name = $_FILES['avtar']['name'];
	$file_size = $_FILES['avtar']['size'];
	$file_tmpname = $_FILES['avtar']['tmp_name'];

$ext =strtolower(end(explode('.',$file_name)));
$exti = array("jpeg","jpg","png","pdf");


if(in_array($ext,$exti)==true & $file_size < 2100000 ){
	
	move_uploaded_file($file_tmpname,"profile/". $file_name );


}else{
	echo "sorry to uplode";
}

}


$name = mysqli_real_escape_string($conn,$_POST['name']);
$sirname = mysqli_real_escape_string($conn,$_POST['sirname']);
$username = mysqli_real_escape_string($conn,$_POST['username']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,md5($_POST['password']));
$role = mysqli_real_escape_string($conn,$_POST['role']);

//echo $role;
$sqln = "SELECT * FROM signup WHERE username = '{$username}' ";

$resn = mysqli_query($conn,$sqln);

if(mysqli_num_rows($resn)>0){

	header("location:signup.php");
}else{
	$sql = "INSERT INTO `signup` ( `name`, `sirname`, `username`, `email`, `password`, `pro`, `role`) VALUES ( '{$name}', '{$sirname}', '{$username}', '{$email}', '{$password}', '{$file_name}', '$role')";

$res = mysqli_query($conn,$sql);

if($res==true){
	header("location:login2.php");

}else{

header("location:signup.php");
}
}


}


?>
    
    
<div class="a">
 <form action="<?php $_SERVER['PHP_SELF']?>" enctype="multipart/form-data" method="POST">
	<label for="b" class="d">name</label>
	<input placeholder="name here" type="text" 
	name="name" class="b" id="">
    <label for="" class="d">Sirname</label>
	<input placeholder="sirname here" type="text" name="sirname" class="b">
	<label for="" class="d">Username</label>
	<input placeholder="username here" type="text" name="username" class="b">
	<label  for="" class="d">Email</label>
	<input  placeholder="email here" type="email" name="email" class="b">

	<label  for="" class="d">role</label>
	<select name="role" id="">
		<?php 
$sql2 = "SELECT * FROM signup";
$res2 = mysqli_query($conn,$sql2);
if($res2 == true){

	echo "<option value='0'>normal</option>" ;
	echo 	"<option value='1'>admin</option>";

}else{
	echo "please define role";
}
		?>
		
	</select>
	<label for="" class="d">Password</label>
<input placeholder="password here" type="password" name="password" class="b">
<label for="" class="d">Profile Pics</label>
<input  type="file" name="avtar" class="b">
		<input type="submit" name="signup"
		 value="Register" class="c">
 </form>
</div>
</body>
</html>