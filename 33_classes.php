<?php
  class car{     
    public $name;
    public $category;
    public $top_speed;
    public $price;
    function set_name($name){
        $this->name=$name;
    }
    function set_category($category){
        $this->category=$category;
    }
    function set_speed($speed){
        $this->top_speed=$speed;
    }
    function set_price($price){
        $this->price=$price;
    }
    function get_name(){
        return ($this->name);
    }
    function get_category(){
        return ($this->category);
    }
    function get_top_speed(){
        return ($this->top_speed);
    }
    function get_price(){
        return ($this->price);
    }
  }
  $ferrarri = new car();
  $ferrarri->set_name('ferrarri');
  $ferrarri->set_category('racing');
  $ferrarri->set_speed('300kmph');
  $ferrarri->set_price('2Crore');
  echo 'Name:'. $ferrarri->get_name().'<br>Category:'. $ferrarri->get_category(). '<br>Top speed:'. $ferrarri->get_top_speed() . '<br>Price:' . $ferrarri->get_price();
?>