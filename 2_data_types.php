<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTypesInPhP</title>
</head>
<body>
    <!-- Data types in php
    1.string
    2.integer
    3.float
    4.boolean
    5.array
    6.object
    8.NULL -->

    <?php
    //STRINGS
    $name_1="Arko";
    echo var_dump($name_1)."<br>";
    $name_2="Rick";
    echo var_dump($name_2)."<br>";
    echo "$name_1 is the best friend of $name_2 <br>";
    ?>

    <?php
    //INTEGERS
    $int_1=23;
    $int_2=46;
    echo ($int_2+$int_1)."<br>";
    ?>

    <?php
    //FLOAT
    $float_1=12.56;
    $float_2=13.78;
    echo (var_dump($float_1))."<br>";
    echo (var_dump($float_2))."<br>";
    ?>

    <?php
    //BOOLEAN
    $TRUE=true;
    $FALSE=false;
    echo(var_dump($TRUE)."<br>");
    echo(var_dump($FALSE)."<br>");
    ?>

    <?php
    //ARRAY
    $array_1=array("Rick","Arko");
    echo (var_dump($array_1));
    echo"<br>";
    echo $array_1[0]."<br>";
    echo $array_1[1]."<br>";
    ?>

    <?php
    //OBJECTS
    //TO BE STUDIED LATER IN THE COURSE
    ?>

    <?php
    //NULL
    $null=NULL;
    echo var_dump($null);
    ?>
</body>
</html>