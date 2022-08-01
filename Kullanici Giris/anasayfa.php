<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>

        body{
            background-color:#00FF00;
        }
    </style>
    <title>Document</title>
</head>
<body>
<?php 
 
 include("baglan.php");
 ob_start();
 session_start();
  
 if(!isset($_SESSION["username"])){
     header("Location:index.php");
 }
 else {
    
 
    echo'<center>
    <h1>Giriş YAPTINIZZ</h1><br>
    <button class="btn2"><a href=logout.php>Guvenli cikis</a></button></center>
    </center>';

}
?>
</body>
</html>