<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StringFunctionsInPhP</title>
</head>
<body>
    <?php
    $string="I am an intelligent boy.My dream is to become very rich become a pilot and help people with my engineering skills.I will bring a dent in the universe.";
    //string length function strlen()
    echo "string length of string=".strlen($string)."<br>";
    // string word count function str_word_count()
    echo "Number of words in the string=".str_word_count($string)."<br>";
    //string reverse function strrev()
    echo "Reversed string=". strrev($string)."<br>";
    //string repeat function str_repeat()
    echo "String repeat=". str_repeat($string,2)."<br>";
    //string replace function str_replace()
    echo "String replace 'dent' with 'change'=". str_replace("dent","change",$string)."<br>";
    //string position function strpos()
    echo "Position of boy in the string=".strpos($string,"boy")."<br>";
    //left trim function ltrim() and right trim function rtrim()
    echo "<h1><pre>";
    echo ltrim("   I will become very rich one day     ");
    echo "<br>";
    echo rtrim("   I will become very rich one day     ");
    echo "</pre></h1>";
    ?>
</body>
</html>