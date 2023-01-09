<?php 

// Render on browser 
echo "<h2>Hello World</h2>";
//print("My first PHP code");

// View HTML source code using Ctrl + U. Don't show PHP at all

// Variables 

$name = "Prabesh Gupta";
$age = 21;
$address = "Kadaghari";
$education = "Bachelors Degree";
$email = "prabeshtech232@icloud.com";
$number = 9823040075;

echo "I am ".$name.". I am ".$age." years old. I live in ".$address.". I have ".$education." in Computer Application. My email address is ".$email."
 and my phone number is ".$number.".<br><br>";


// Display the dataType of variables 
echo var_dump($email,$number);

//Constants

define("Country","Nepal");

echo Country;

?>