<?php

$servername="localhost";
$username="root";
$password="";
$database="db_2";
$connect=mysqli_connect($servername,$username,$password,$database);
if(!$connect){
    die("Error connecting to database due to ").mysqli_connect_error();
}
$text_1=readfile("text_1.txt");
echo($text_1)."<br>";
mysqli_close($connect);
?>