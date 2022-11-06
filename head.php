<?php 
session_start();
if(!isset($_SESSION['shivansh'])){
header("location:login2.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
    .a {
        margin: 0;padding: 0;border: 2px solid green;
        width: 100%;
        height: 100px;
    }.img{margin: 0;padding: 0;border: 2px solid red; width: 10%; height: 100%;float: left;
        clear: right;

    } .menu{
        padding: 0;border: 2px solid black; width: 89%; height: 100%;
       float: right; clear: right;
       margin-right: 2px;

    } .btn{
        float: right;
    }.ul{
        margin: 20px;padding: 20px;
        height: 100px;}
    li{
        float: right;
        width: 23%;height: 98%;
        border: 2px solid black;
        border-radius: 10px;
        margin-right: 10px;
        display: block;
    }a{
        font-size: 26px;
        text-decoration: none;
        color: black;
    }
</style>
</head>
<body>
    <header>
        <?php 
        include "conn.php";
        $k = $_SESSION['uid'];
          $sqls = "SELECT * FROM signup WHERE id = $k ";

          $res = mysqli_query($conn,$sqls);
          if ($res == true) {
              //echo "hello";
              while ($row = mysqli_fetch_assoc($res)) {
                  
             
              

          
        ?>
       <div class="a">
           <div class="img">
               <img src="profile/<?php echo $row['pro']; ?>" alt="" width="100%" height="100%">
           </div>
 <?php 
}
}
 ?>
           <div class="menu">
            <li><a href="Home">home</a></li>
            <li><a href="category.php">category</a></li>
            <li><a href="product.php">product</a></li>
            <li><a href="contact.php">contact</a></li>
              
           </div>
           
       </div> 
    </header>
</body>
</html>