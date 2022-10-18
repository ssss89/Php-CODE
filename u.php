<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .u{
            width:400px;
            background-color: rgb(210,120,99);
            height: 400px;
            margin:auto;
            padding: 20px;
            margin-bottom:20px;
            
        }
    </style>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<?php 
include "db.php";
// THIS IS UPLODE MOVING CODE FROM LINE 27 TO 48
if(isset($_FILES['filetomove']))
{

    $file_name = $_FILES['filetomove']['name'];
    $file_size = $_FILES['filetomove']['size'];
    $file_tmp = $_FILES['filetomove']['tmp_name'];
    // LINE 34 EXPLODE FUNCTION SPLIT STRING IN TWO PART WHERE IT GET DOT(.) 
    // ON SAME LINE END FUN GET LAST (END) STRING 
    // ON SAME LINE IF IMAGE NAME IN CAPS LOCK LIKE (FIRST.JPG) SO STRTOLOWER FUNCTION CONVERT IT IN (jpg)
    $file_ext = strtolower(end(explode('.', $file_name)));
    
    $ext = array("jpeg","jpg","png");
    echo "<h2>" . $file_ext . "</h2>";
      // line 41 in_array function check array value
    if(in_array($file_ext, $ext  )== true & $file_size <=2100000 ){
        echo " <h2> good </h2> ";
     // line 44 get helps you to move your file in set folder here folder is uplode and this folder is available in same directory mean u.php and uplode folder available in same loction.
    move_uploaded_file($file_tmp,"uplode/" . $file_name);

      
    }else{
        header("location:u.php");
    }

    print_r("<h2>" . $file_tmp . "</h2>" );print_r("<h2>" . $file_size . "</h2>" );print_r("<h2>" . $file_name . "</h2>" );
}

// THIS IS FORM DATA CODE LINE 51 TO 72
if(isset($_POST['uplode'])) 
{

    echo " <h2> uplode pressed  </h2> ";

    $ftitle = mysqli_real_escape_string($conn,$_POST['filetitle']);
    $fdis = mysqli_real_escape_string($conn,$_POST['filedis']);
    $fpost = mysqli_real_escape_string($conn,$_POST['filepost']);
    echo $ftitle;echo $fdis;echo $fpost;

    
   // $sql = "INSERT INTO `uplode`('name','email','username','filename') VALUES('{$ftitle}', '{$fdis}', '{$fpost}', '{$file_name}' ) ";
    $sql = "INSERT INTO `uplode` (`name`, `email`, `username`, `filename`) VALUES ('{$ftitle}', '{$fdis}', '{$fpost}', '{$file_name}')";
    $res = mysqli_query($conn,$sql);

    if($res == true){
        echo "success";
    }else{
        header("location:u.php");
    }

}

?>

<div class="u">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" class="form-control">

  <input type="text" name="filetitle">
  <input type="text" name="filedis">
  <input type="text" name="filepost">
  <input type="file" name="filetomove">
  <input type="submit" name="uplode">
  </form>
  </div>
</body>
</html>