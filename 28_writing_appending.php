<?php

$servername = "localhost";
$username = "root";
$password = "";
$connect=mysqli_connect($servername,$username,$password);
//writing to file text_2.txt
$fptr=fopen("text_2.txt","w");
fwrite($fptr,"My name is Arko and this is text_2.txt file.");
fwrite($fptr,"I will become very rich one day.");
fclose($fptr);
//appending to file text_2.txt
$fptr=fopen("text_2.txt","a");
fwrite($fptr,"I will become a Pilot one day for sure.");
fclose($fptr);
mysqli_close($connect);
?>