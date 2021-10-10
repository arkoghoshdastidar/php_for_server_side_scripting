<?php declare(strict_types=1);
/*
1.USER DEFINED FUNCTIONS.
*/
function greetings(){
    echo "Hello.....How are you?(:"."<br>";
}
greetings();
/*
2.FUNCTION WITH ARGUMENTS.
*/
function printName($fname,$mname="",$lname=""){
    echo "$fname $mname $lname <br>";
}
printName("Arko","Ghosh","Dastidar");
printName("Chaitali","Ghosh","Dastidar");
printName("Aruna","Ghosh","Dastidar");
printName("Amitava","Ghosh","Dastidar");
printName("Rick");
printName("Devopriyo");
printName("Aron","","Blaze");
/*
3.Function having arguments and return type with particular data type.
*/
function add(int $num_1, int $num_2):int{
    return($num_1+$num_2);
}
echo "5+2=".add(2,5). "<br>";
echo "5+5=".add(5,5). "<br>";
echo "5+7=".add(7,5). "<br>";
echo "7+2=".add(2,7). "<br>";
/*
4.Average of an integer array.
*/
$count=0;
function avg($array):float{
    $sum=0;
    global $count;
    foreach($array as $value){
        $sum+=$value;
        $count+=1;
    }
    return ($sum/$count);
}
$array_1= array(1,2,3,4,5,6,7,8,9,10);
$average=avg($array_1);
echo "Average of array_1=$average <br>";
/*
5.Pass by reference. 
*/
function addTwo(&$num){
    $num+=2;
}
$num=0;
addTwo($num);
echo "$num <br>";
addTwo($num);
echo "$num <br>";
addTwo($num);
echo "$num <br>";
addTwo($num);
echo "$num <br>";
?>