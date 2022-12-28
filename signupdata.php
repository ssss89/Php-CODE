<?php 


include "conn.php";
if(isset($_POST['register'])){
	if(isset($_FILES['propic'])){
		$filename = $_FILES['propic']['name'];
		$filetemname = $_FILES['propic']['tmp_name'];
		$filesize = $_FILES['propic']['size'];
		$filetype = $_FILES['propic']['type'];
		//$ext = {'pdf','png','jpg'};
		$expo = strtolower(end(explode('.',$filename)));
		$exten = array("jpg",'png',"jpeg");
		print_r($filename );
		if(in_array($expo, $exten)){
			move_uploaded_file($filetemname,'signupprofile/'.$filename);
		}else{
			echo "<div><h2>go to main page";
		}


	}

	$name = $_POST['Name'];

	$sirname = $_POST['sirname'];

	$username = $_POST['username'];

	$password = md5($_POST['password']);
	echo $name ."<br>". $sirname . "<br>" . $username . "<br>". $password;


	$sql = "INSERT INTO `signup`(`name`,`sirname`,`username`,`password`,`filename`) VALUES('$name','$sirname','$username','$password','$filename')";

	$result = mysqli_query($conn,$sql);




}

?>
