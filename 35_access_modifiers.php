<?php
class employee{
    protected $name;
    protected $age;
    protected $salary;
    public function __construct($name,$age,$salary){
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
    }
    public function print(){
        echo $this->name .' '.$this->age.' '.$this->salary.'<br>';
    }
}
class programmer extends employee{
    protected $language;
    public function __construct($name,$age,$salary,$language){
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
        $this->language=$language;
    }
    public function print(){
        echo $this->name.' '.$this->age.' '.$this->salary.' '.$this->language.'<br';
    }
}
$non_programmer = new employee("XYZ",24,"50000PM");
$non_programmer->print();
$programmer = new programmer("XYZ",23,"150000PM","php");
$programmer->print();
?>