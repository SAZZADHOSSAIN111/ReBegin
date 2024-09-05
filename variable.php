<?php
$x = 4;
echo $x;
echo "<br>";
$x = 10;
echo $x;

/*Rules for PHP variables:

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)*/

echo "<br>";

$txt = "W3Schools.com";
echo "I love " . $txt . "!";
echo "<br>";

var_dump($txt); // To get the data type of a variable, use the var_dump() function.

$x = $y = $z = "Fruit";  //You can assign the same value to multiple variables in one line:

 // Global and Local Scope A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

 //  A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
$x = 5; //global variable

function call(){
    $x= 10; // local variable
    echo "<p>this is a number: $x </p>";
 }
call();
echo $x;


?>