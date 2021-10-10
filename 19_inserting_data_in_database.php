<?php

$servername="localhost";
$username="root";
$password="";
$database="db_2";

$connect=mysqli_connect($servername,$username,$password,$database);
if(!$connect){
    die("server connection failed").mysqli_connect_error();
}
else{
    echo ("server connection successful <br>");
}
$name="ARKO GHOSH DASTIDAR";
$salary=10000000;
$DATE="20-02-2023";   
$mysql="INSERT INTO `table_1` ( `NAME`, `SALARY`,`DATE`) VALUES ('$name','$salary','$DATE')";
$result=mysqli_query($connect,$mysql);

if($result){
    echo ("data entered successfully <br>");
}
else{
    echo ("error in data entry <br>");
}
mysqli_close($connect);
?>