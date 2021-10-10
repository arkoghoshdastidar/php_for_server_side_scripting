<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET/POST REQUEST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<?php 
$servername="localhost";
$username="root";
$password="";
$database="db_2";
$connect=mysqli_connect($servername,$username,$password,$database);
$name= $_POST['NAME'];
$salary=$_REQUEST['SALARY'];
$mysql="INSERT INTO `table_2` ( `NAME`, `SALARY`) VALUES ('$name','$salary')";
$result=mysqli_query($connect,$mysql);
if($connect){
    echo ("connection with server successful <br>");
}
else{
    echo ("connection failed").mysqli_connect_error();
}
if($result){
    echo ("data entry successful <br>");
}
else{
    echo("data entry failed").mysqli_error($connect);
}
mysqli_close($connect);
?>
<form action="/phpFiles/20_input_form.php" method="post">
<div class="mb-3">
    <label for="NAME" class="form-label">NAME</label>
    <input type="TEXT" class="form-control" id="NAME" aria-describedby="emailHelp" name="NAME">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="SALARY" class="form-label">SALARY</label>
    <input type="NUMBER" class="form-control" id="SALARY" name="SALARY">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>