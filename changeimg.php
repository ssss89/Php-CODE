<?php 
//echo "change img ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Change Brand Logo</title>

</head>
<body>

<?php 
include "conn.php";
include "head.php";
$g = $_SESSION['uid'];

if(isset($_POST['change'])){
	//echo "ggg";
	if(isset($_FILES['imgchange'])){

	$file_name = $_FILES['imgchange']['name'];
	$file_size = $_FILES['imgchange']['size'];
	$file_tmpname = $_FILES['imgchange']['tmp_name'];

$ext =strtolower(end(explode('.',$file_name)));
$exti = array("jpeg","jpg","png");


if(in_array($ext,$exti)==true & $file_size < 2100000 ){
	
	move_uploaded_file($file_tmpname,"profile/". $file_name );


}else{
	echo "sorry to uplode";
}

}





//echo $role;
$sqln = "SELECT * FROM signup WHERE pro = '{$file_name}' ";

$resn = mysqli_query($conn,$sqln);

if(mysqli_num_rows($resn)>0){

	header("location:main.php");
}else{
	$sql = "UPDATE `signup` SET `pro` = '{$file_name}' WHERE `signup`.`id` = $g";

$res = mysqli_query($conn,$sql);

if($res==true){
	header("location:main.php");

}else{

echo "sorry to Update brand Logo";
}
}


}


?>



	<form action=" <?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="POST">
		<label for="" class="d">Change Your Brand Logo</label>
<input type="file" name="imgchange" class="b">
<input type="Submit" name="change" value="profile change">
	</form>
</body>
</html>