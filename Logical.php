<?php

//IF
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
echo "\n";
//if-else
if ($t > "11") {
    echo "Have a good night!";
  } else {
    echo "Have a good day!";
  }
echo "\n";
//if else if
if ($t < "10") {
    echo "Have a good morning!";
  } elseif ($t < "20") {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }
  echo "\n";
  //switch
  $favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>