<?php
//First and foremost create a connection between the php page and the server.
$servername="localhost";
$username="root";
$password="";
$connect= mysqli_connect($servername,$username,$password);
if(!$connect){
    die ("connection to server failed").mysqli_connect_error();
}
else{
    echo "server connection successful <br>";
}
//Connection with server done successfully now add a database to phpMyAdmin.
$mySql= "CREATE DATABASE dB_2";
$result= mysqli_query($connect,$mySql);
if($result){
    echo "dB_2 created successfully <br>";
}
else{
    echo "dB_2 not created".mysqli_error($connect)."<br>";
}
?>