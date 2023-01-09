<?php

$names = array("Prabesh", "Aayush", "Sanu", "Jay Prakash");

//*Single element print
echo $names[3] . "<br>";

//* Print all elements from array

foreach ($names as $name) {
    echo "The name is " . $name . "<br>";
}


//* Sort array elements
$numbers = array(14, 32, 45, 67, 35, 21, 43);

//?Ascending order
sort($numbers);

//?Descending order
rsort($numbers);

foreach ($numbers as $number) {
    echo "The number is " . $number . "<br>";
}


?>