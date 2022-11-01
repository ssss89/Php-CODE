
<?php
session_start();
//$s = $_GET['$_SESSION["id"]'];


if($_SESSION['id']== true){

    header("location:display.php");

}else{



    print_r($_SESSION['id']);


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
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

include "db.php";
if(isset($_POST['login'])){

    $user = mysqli_real_escape_string($conn,$_POST['username']);
    $pass =  mysqli_real_escape_string($conn,$_POST['password']);

    $sql = "SELECT * FROM register WHERE username= '{$user}'  ";
    $res = mysqli_query($conn,$sql);

    if( mysqli_num_rows($res)>0){

        while($row= mysqli_fetch_assoc($res)){

            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];

           // print_r($_SESSION['username']); echo "<br>";

            //print_r($_SESSION['email']); echo "<br>";

            //print_r($_SESSION['id']);  echo "<br>";

            header("location:display.php");

            

            //if($_SESSION['username']=='{$user}'){
                
            //}

        }
        
    }else{
        header("location:login.php");
    }
}

?>

    <div class="a">
    <form action="" method="POST" class= "from-control">

<input type="text" name="username" class= "from-control" placeholder=" username here" id="b">
<input type="text" name="password" class= "from-control" placeholder=" password here" id="b">
<input type="submit" name="login" value="login" class= "from-control" id="b">

    </form>
    </div>
</body>
</html>