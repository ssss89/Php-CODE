<?php 
include "db.php";
if(isset($_POST['sdfg']))
{
   
    $fname = $_POST['name'];
    $femail = $_POST['email'];
    $funame = $_POST['username'];
    //echo  $fname ."<br>". $femail . "<br>". $funame;



    /**if(isset($_FILES['filetoupde']))
    {
        $filenames = $_FILES['filetouplode']['name'];
        $filesize = $_FILES['filetouplode']['size'];
        $filetmpnames = $_FILES['filetouplode']['tmp_name'];
        $filetype = $_FILES['filetouplode']['type'];
        $ext = strtolower(end(explode(".",$filenames)));
        $exti = array("jpeg","jpg", "png");
        
        move_uploaded_file($filenames,"a/uplode/" .$filenames);



    }**/

    if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
        
        $extensions= array("jpeg","jpg","png");
        print_r($file_name). "</h2>" ;
        DIE();
        }
        
        /**if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }
        **/
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"a/uplode/".$file_name);
           echo "Success";
        }else{
             print_r($file_name);
     }
}


?>