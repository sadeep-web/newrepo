<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$host="localhost";
$user ="root";
$pw="";

$conn = mysqli_connect($host,$user,$pw);

if($conn){

    echo "connected";

}else{

    die('error in db'.mysqli_error());
}




echo "third branch";



?>
    
</body>
</html>