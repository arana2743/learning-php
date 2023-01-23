<?php
// echo - output string, numbers, boolean, html, etc
echo 10; 
echo "Hello World"; 
echo 10.23; 
echo true;
echo '<h1>Heading tag 1</h1>';

// print - works like echo, but can only take in a single argument
print "Coming from print";

// print_r() - print single values and arrays
print_r([1,2,3,4]);

// var_dump() - returns more info like datatype and length
var_dump('Hello');

// var_export() - similar to var_dump(). 
// Outputs a string representation of a variable
var_export('Hello');
var_export(20);
?>