<?php

$servername="localhost";
$username="root";
$password="";
$database="dB_2";

$connect=mysqli_connect($servername,$username,$password,$database);
if(!$connect){
    die("server connection falied").mysqli_connect_error();
}
else{
    echo("server connection successful <br>");
}
// database is already created so no need to create any other

$mysql="CREATE TABLE `table_2` ( `S.NO` INT(15) NOT NULL AUTO_INCREMENT , `NAME` VARCHAR(15) NOT NULL , `SALARY` INT(15) NOT NULL  , PRIMARY KEY (`S.NO`))";

$test = mysqli_query($connect,$mysql);

if($test){
    echo ("table created successfully <br>");
}
else{
    echo("table not created <br> ").mysqli_error($connect).("<br>");
}   
mysqli_close($connect);
?>