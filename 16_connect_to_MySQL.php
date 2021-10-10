<?php 
$servername="localhost";
$username="root";
$password="";
$connect= mysqli_connect($servername,$username,$password);
if(!$connect){
    die("Failed to load server".mysqli_connect_error());
}
else{
    echo("Server loaded successfully <br>");
}
mysqli_close($connect);
?>