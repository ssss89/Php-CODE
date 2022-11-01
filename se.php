<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>.f{
        height:60px;
        background-color:lightyellow ;
        font-size:22px;
    }</style>
</head>
<body>
<?php    

//include "db.php"; //this is connection
//include "head.php"; // this is header file


$a = 10;
echo "<div class=''>

<b>
first variable: 
</b>
<nbsp>
 " . $a . "</div><br>";

//we can assign new value
//1)
$a = "hello";
echo "<div class=''> <b> assign new value in  variable a: </b><nbsp> "  . $a . " </div><br>";


//how to right

$a_1 = 40;
echo "<div class=''> <b>numerical name (a_1) : </b><nbsp>" . $a_1 . " <br>";

$b23b = "string numerical string";
echo "  <b>numerical name (b23b) : </b><nbsp>" . $b23b . "<br>";

//write with underscore

$c_d = "first name underscore second name (s_d)";
echo " <b>underscore name (c_d) : </b><nbsp>" . $c_d . "<br>";



//camale case

$VarName = "Camel case variable";

echo " <b>camel case : </b><nbsp>" . $VarName . " </div><br>";


//constaint variable

define("shivansh","40"); 
// define is keyword ,shivansh is variable name,40 is variable value

echo "<div class='f'> <b>constant variable : </b><nbsp>" . shivansh . "<br>";




?>
</body>
</html>