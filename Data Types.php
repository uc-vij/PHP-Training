<?php
//PHP STRING
$x = "Hello world!";
$y = 'Hello world!';
echo "\n";
echo $x;
echo "\n";
echo $y;
echo "\n";
//PHP Integer
$x = 5985;
var_dump($x);
//PHP float
$x = 10.365;
var_dump($x);
//PHP array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
//PHP Objects
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();
?>