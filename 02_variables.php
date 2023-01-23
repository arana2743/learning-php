<?php
/*
PHP variable datatypes:
- String    : Series of characters surrounded by quotes
- Integer   : Whole numbers
- Float     : Decimal numbers
- Boolean   : true or false
- Array     : Special variable which can hold more than one value of single datatype
- Object    : A class instance
- NULL      : Empty variable
- Resource : Special variable that holds a resource such as database connection
*/
$name = "John";
$age = 35;
$has_kids = true;
$cash_on_hand = 20.55;

var_dump($name);
var_dump($age);
var_dump($has_kids);
var_dump($cash_on_hand);

// using variables with strings
// way 1 : using dot
echo $name . ' is ' . $age . ' years old.';

// way 2 : interpolation
echo "{$name} has {$cash_on_hand} cash on hand.";

// constants : declared using define()
define('HOST', 'localhost');
define('PORT', 8000);

var_dump( HOST);
var_dump(PORT);

?>