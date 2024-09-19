<?php
/*In PHP we have the following conditional statements:

if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true and another code if that condition is false
if...elseif...else statement - executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed
*/

if (5>3){
    echo "this is great";
}

echo "<br>";

$x=8;

if ($x!=5){
    echo "this is great";
}
echo "<br>";

$t= date("H");

if($t<"12"){
    echo "have a good Morning";
}elseif($t>"20"){
    echo "have a good day";
    
}else {
    echo "have good night";
}
echo "<br>";

$a = 13;                                 //this is a nested if

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}
?>