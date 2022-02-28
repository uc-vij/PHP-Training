<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function


echo "\n";
//PHP function Arguements
function familyName($fname) {
    echo "$fname Refsnes";
    echo "\n";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");

  echo "\n";
  //Default Arguement Value
  function setHeight(int $minheight = 50) {
    echo "The height is : $minheight ";
    echo "\n";
  }
  
  setHeight(350);
  setHeight(); // will use the default value of 50
  setHeight(135);
  setHeight(80);

  echo "\n";
  //Function Value Reference
  function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;
?>