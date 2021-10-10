<?php
class bike{
    public $name;
    public $price;
    public $mileage;
    function __construct($name,$price,$mileage){
        $this->name=$name;
        $this->price=$price;
        $this->mileage=$mileage;
    }
    function __destruct(){
        echo '<br>destructing '.$this->name;
    }
}
$hero_honda = new bike('heroHonda','80000Rs','45kmpl');
$KTM = new bike('KTM','280000Rs','25kmpl');
$R3 = new bike('R3','380000Rs','15kmpl');
echo '<br>NAME:'.$hero_honda->name;
echo ' PRICE:'.$hero_honda->price;
echo ' MILEAGE:'.$hero_honda->mileage;
echo '<br>NAME:'.$KTM->name;
echo ' PRICE:'.$KTM->price;
echo ' MILEAGE:'.$KTM->mileage;
echo '<br>NAME:'.$R3->name;
echo ' PRICE:'.$R3->price;
echo ' MILEAGE:'.$R3->mileage;
?>