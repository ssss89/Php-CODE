


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
    </style>
</head>
<body>

<?php 
 include "db.php";
 include "head.php";
 //$ese = $_SESSION['username'];
 $sql = "select * from  uplode";
 $res = mysqli_query($conn,$sql);
 
 
 
 if($res == true){
    // $i= 1;
 while( $row = mysqli_fetch_assoc($res)  ) 
 {
 
     //$i++;
 
 ?>
     <div class="d">
 <img src="uplode/<?php  echo  $row['filename'] ;?>" alt="" width = "400px;">
     </div>
 
     <?php  } 
     
 }

?>




</body>
</html>