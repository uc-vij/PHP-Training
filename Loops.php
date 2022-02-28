<?php

echo "vijirt";
echo "\n";

//For Loop
echo "Forloop";
echo "\n";
for($x=0;$x<10;$x++) {
    echo $x;
    echo "\n";
}

//while loop
echo "while loop";
echo "\n";
$x=0;
while($x<5) {
    echo $x;
    echo "\n";
    $x++;

}

//Do-While Loop
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

echo "\n";
//For Each
$colors = array("red", "green", "blue", "yellow");
echo "\n";
foreach ($colors as $value) {
  echo "$value";
  echo "\n";
}
?>