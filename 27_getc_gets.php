<?php
$servername="localhost";
$username="root";
$password="";
$database="db_2";
$connect=mysqli_connect($servername,$username,$password,$database);
if(!$connect){
    die("Unable to connect to database due to ").mysqli_connect_error();
}

$fptr=fopen("text_1.txt","r");
while($fcontent=fgets($fptr)){
    echo($fcontent)."<br>";
}

fclose($fptr);
$fptr=fopen("text_1.txt","r");
while($fcontent=fgetc($fptr)){
    echo($fcontent)."<br>";
}
fclose($fptr);

$fptr=fopen("text_1.txt","r");
while($fcontent=fgetc($fptr)){
    echo($fcontent);
    if($fcontent==".")
    break;
}

mysqli_close($connect);
?>