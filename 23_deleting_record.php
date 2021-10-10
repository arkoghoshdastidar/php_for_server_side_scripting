<?php

$servername="localhost";
$username="root";
$password="";
$database="db_2";
$connect=mysqli_connect($servername,$username,$password,$database);
if(!$connect)
{
    die("connection lost<br>").mysqli_connect_error();
}
else
{
    echo("connection successful <br>");
}
$mysql="DELETE FROM `table_3` WHERE `USERNAME`='arko@gmail.com'";//use LIMIT X to prevent deletion more than X ,where X is a natural number.
$result=mysqli_query($connect,$mysql);
if($result)
{
    echo ("Items deleted from the list<br>");
}
else
{
    echo("deletion failed due to ").mysqli_error($connect);
    echo "<br>";
}
mysqli_close($connect);
?>