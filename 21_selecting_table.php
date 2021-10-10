<?php

//connect to the server 

$servername="localhost";
$username="root";
$password="";
$database="db_2";
$connect= mysqli_connect($servername,$username,$password,$database);
if(!$connect)
{
    die("connection lost").mysqli_connect_error();
}
else
{
    echo("connection successful <br>");
}

// now select the table from db_2 using mysqli_query

$mysql="SELECT * FROM `table_3`";
$result=mysqli_query($connect,$mysql);

// after selecting the table select the rows of the table using mysqli_fetch_assoc($result) function
// mysqli_num_rows($result) returns the number of rows in the table

if(!$result)
{
    echo("table connection failed <br>").mysqli_error($connect);
}
else
{
    $num=mysqli_num_rows($result);
    echo("Number of rows in the table_3 is ").$num."<br>";
    $index=1;
    // (`S.NO`, `NAME`, `PHONE`, `EMAIL`, `USERNAME`, `ADDRESS`, `DATE`)
    while($rows=mysqli_fetch_assoc($result))
    {
        echo $index. " .Hello..." .$rows['NAME']."&nbsp;&nbsp;". $rows['PHONE']."&nbsp;&nbsp;".$rows['EMAIL']."&nbsp;&nbsp;".$rows['USERNAME']."&nbsp;&nbsp;".$rows['ADDRESS']."&nbsp;&nbsp;".$rows['DATE']. "<br>";
        $index++;
    }
}
mysqli_close($connect);
?>