<?php
//connecting to database
$servername="localhost";
$username="root";
$password="";
$database="db_2";
$connect=mysqli_connect($servername,$username,$password,$database);
if(!$connect)
{
    die("connection failed <br>").mysqli_connect_error();
}
else
{
    echo("connection successful <br>");
}

//selecting rows from table_3 of db_2
$mysql="SELECT * FROM `table_3` WHERE `USERNAME`='arko@gmail.com'";
$result=mysqli_query($connect,$mysql);
if($result)
{
    $num=mysqli_num_rows($result);
    echo $num." rows selected. <br>";
   if($num>0)
   {
    while($rows=mysqli_fetch_assoc($result))
    {
        echo $rows['NAME']." ".$rows['USERNAME'].$rows['PHONE']."<br>";
    }
   }
}

//updating the names with USERNAME arko@gmail.com

$mysql="UPDATE `table_3` SET`PHONE`='6207' WHERE `USERNAME`='arko@gmail.com'";
$result=mysqli_query($connect,$mysql);
if($result)
{
    echo("updated successfully <br>");
}
else
{
    echo("updation error due to ").mysqli_error($connect);
}
$mysql="SELECT * FROM `table_3` WHERE `USERNAME`='arko@gmail.com'";
$result=mysqli_query($connect,$mysql);
if($result)
{
    $affected=mysqli_affected_rows($connect);
    echo("No. of affected of rows due to updation:").$affected."<br>";
    while($rows=mysqli_fetch_assoc($result))
    {
        echo $rows['NAME']." ".$rows['USERNAME'].$rows['PHONE']."<br>";
    }
}
else
{
    echo("error due to ").mysqli_error($connect);
}
mysqli_close($connect);
