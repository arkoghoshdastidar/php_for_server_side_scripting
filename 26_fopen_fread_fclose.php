<?php
$servername="localhost";
$username="root";
$password="";
$database="db_2";
$connect=mysqli_connect($servername,$username,$password,$database);
if(!$connect){
    die("Connection failed due to ").mysqli_connect_error();
}
$fptr=fopen("text_1.txt","r+");
$fcontent=fread($fptr,5);
echo($fcontent);
$fcontent=fread($fptr,5);
fclose($fptr);
echo($fcontent);
mysqli_close($connect);
?>