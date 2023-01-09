<?php

//* Function
function device($model)
{
    echo "Device model is " . $model . "<br>";
}

//! Function has to be called
device("Samsung M21");



// todo Scoping in function
$name = "Suman Karki";

function display()
{
    global $name;
    echo $name;
}

display();

?>