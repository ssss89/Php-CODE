<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <STYLE>
        .a{
            width:150px;
            height:150px;
        }
    </STYLE>
</head>
<body>


<?php
//session_start();
if($_SESSION['username'] == false ){

    header("location:login.php");

}


?>
         <header>

         <div >
    <button class="a"><a href="logout.php">Log Out</a></button>
</div>
         </header>
</body>
</html>