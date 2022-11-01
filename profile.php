<?php 
 include "db.php";
 include "head.php";
 echo "hello <br> <br> ";

 $ses = $_SESSION['id'];
 print_r($ses);


 $sql = "SELECT * FROM register WHERE id = {$ses}  ";
 $res = mysqli_query($conn,$sql);

  if(mysqli_num_rows($res)>0){


  while($rows = mysqli_fetch_assoc($res)) {
    
?>


 <div class="d">
    <img src="profile/<?php  echo  $rows['filename'] ;?>" alt="" width ="200px;">
        

 </div>
    
<?php 
    
  }

     
    
 }

?>



