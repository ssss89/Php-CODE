<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .a{
            width:400px; margin:auto; margin-top:200px; margin-bottom:30px; 
            background-color:rgb(210,120,99);
        } .from-control{
            margin-bottom:20px;
            margin-right:30px;
        }
    </style>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>


 <div class="a">
    <form action="save.php" method="POST" enctype="multipart/form-data" class= "from-control" >


 <input type="text" name="name" class= "from-control" placeholder="name here"> <br>
 <input type="text"  name="username" class= "from-control"placeholder=" username here"> <br>
 <input type="email" name="email" class= "from-control" placeholder=" email here"> <br>


 <input type="file" name="avtar"  class= "from-control" placeholder="Images here"> <br>
 <input type="submit"  name="profile" class= "from-control" value="save"> <br>
</form>
</div>
</body>
</html>