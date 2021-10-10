<?php

$servername="localhost";
$username="root";
$password="";
$database="db_2";
$connect=mysqli_connect($servername,$username,$password,$database);

if(!$connect){
    die("Error loading page due to").mysqli_connect_error();
}
else{
    echo("connection to database successful<br>");
}

?>