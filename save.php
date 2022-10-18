<?php 
include "db.php";
if(isset($_FILES['avtar'])){

   $file_name = $_FILES['avtar']['name'];
   $file_size =  $_FILES['avtar']['size'];
   $file_tmpname =  $_FILES['avtar']['tmp_name'];
   $ext = strtolower(end(explode('.', $file_name)));
   $exti = array("jpeg","jpg","png");

   if(in_array($ext,$exti)== true & $file_size <=2100000){

      move_uploaded_file($file_name,"profile/". $file_name );
   }else{
      header("location:signup.php");
   }
}


if(isset($_POST['profile']))
{
   $fname = mysqli_real_escape_string($conn,$_POST['name']);
   $funame = mysqli_real_escape_string($conn,$_POST['username']);
   $femail = mysqli_real_escape_string($conn,$_POST['email']);

  $sqlc = "SELECT * FROM register WHERE username = '{$funame}' ";

  $resc = mysqli_query($conn,$sqlc);

  if(mysqli_num_rows($resc)>0){

   header("location:signup.php");

  }else{


//$sql = "INSERT INTO `register`('firstname','username','email','filename') VALUES('{$fname}','{$funame}','{$femail}','{$file_name}')";
$sql = "INSERT INTO `register` (`firstname`, `username`, `email`, `filename`) VALUES ( '{$fname}', '{$funame}', '{$femail}', '{$file_name}')";
$res = mysqli_query($conn,$sql);

if($res == true){
   header("location:profile.php");
}else{
   header("location:signup.php");
}


  }
   

   

}


?>