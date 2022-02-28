<?php
//BASIC ARRAY
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
echo "\n";

//Indexed Array
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "\n";
//Loop Through Indexed Array
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

echo "\n";
//PHP ASSOCIATIVE ARRAY
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "\n";

//MULTIDIMENSIONAL ARRAY
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

echo "\n";

//sort()
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$arrlength=count($cars);
for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
  }
echo "\n";
//Sort Array in Descending order
rsort($cars);
$arrlength=count($cars);
for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
  }
echo "\n";
//PHP JSON encode()
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);

echo "\n";

//PHP JSON decode()
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));
?>