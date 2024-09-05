<?php
 //PHP Data Types
    //  String
    // Integer
    // Float (floating point numbers - also called double)
    // Boolean
    // Array
    // Object
    // NULL
    // Resource

// Getting the Data Type
    //  You can get the data type of any object by using the var_dump() function.

$x =50000;
var_dump ($x);
echo "<br>";

$x ="this is an string";
var_dump ($x);
echo "<br>";

$x =10.123;
var_dump ($x);
echo "<br>";

$x =true;
var_dump ($x);
echo "<br>";

$x = array("car","dog","cat");
var_dump ($x);
echo "<br>";

$x = Null;
var_dump ($x);
echo "<br>";

$x = strlen("The PHP strlen() function returns the length of a string.");
echo  $x;
echo "<br>";

$x = str_word_count("The PHP str_word_count() function counts the number of words in a string.");
echo  $x;
echo "<br>";

echo strpos("The PHP strpos() function searches for a specific text within a string." , "within");
echo "<br>";

$x = "The PHP strlen() function returns the length of a string.";
echo  strtoupper($x);
echo "<br>";

$x = "The PHP strlen() function returns the length of a string.";
echo  strtolower($x);
echo "<br>";

$x = "The PHP strlen() function returns the length of a string.";
echo  str_replace("strlen()", "str_replace" ,$x);
echo "<br>";

$x = "The PHP strlen() function returns the length of a string.";
echo  strrev($x);
echo "<br>";

$x = "The PHP strlen() function returns the length of a string.";
$y = explode(" ", "$x");
print_r($y);
echo "<br>";

$x = "abdul";
$y = "hamid";
$z = $x . " " . $y;
echo $z;
echo "<br>";

$x = "4";
$y = "6";
$z = $x .  $y;
echo $z;

?>