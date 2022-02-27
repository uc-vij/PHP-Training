<?php
//Basic
echo "Hello World!";
//Case-Insensitivty
echo "\n";
ECHO "Hello World";
echo "\n";
echo "Hello World";
echo "\n";
EcHo "Hello World";
//Ther is no case Insenstivity Now
#COMMENTS
/* MultiLine COmment */
echo "\n";
$color = "red";
echo "My car is " . $color . "<br>";
echo "\n";
echo "My house is " . $COLOR . "<br>";
echo "\n";
echo "My boat is " . $coLOR . "<br>";
echo "\n";
?>

<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "Variable x inside function is: $x";
  echo "\n";
}
myTest();

echo "Variable x outside function is: $x";
?>

