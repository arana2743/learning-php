<?php
$fruits = ['banana', 'orange', 'apple', 'kiwi', 'grapes', 'gauva'];

// count() - check length of array
echo count($fruits);

// in_array() - check if element exists in array
var_dump(in_array('kiwi', $fruits));

// add elements to array to end of array
// way 1
$fruits[] = 'peach';
// way 2
array_push($fruits, 'strawberry');

// add elements to start of array
array_unshift($fruits, 'mango');

// remove elements from array
// from the end
array_pop($fruits);
// from the start
array_shift($fruits);
// particular element by index
// this also remove the index along with element
unset($fruits[2]); 

print_r($fruits);

// split array into chunks
$chunked_array = array_chunk($fruits, 3);
print_r($chunked_array);
echo $chunked_array[0][2];

// merge arrays into one
$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = [7,8,9];
// way 1 : array_merge()
$arr4 = array_merge($arr1, $arr2, $arr3);
// way 2 - spread operator(...)
$arr5 = [...$arr3, ...$arr2, ...$arr1];
print_r($arr4);
print_r($arr5);

// combine 2 arrays in form of key-value pair (make Associative array)
$a = ['green', 'red', 'yellow'];
$b = ['avaocado', 'apple', 'banana'];
$c = array_combine($a, $b);
print_r($c);

// array_keys - extracts all keys/indexes of array
$keys = array_keys($c);
print_r($keys);

// array_flip - flips the key-value of array
$c_flipped = array_flip($c);
print_r($c_flipped);

$numbers = range(1,20);
print_r($numbers);

// map 
$newNumbers = array_map(function($number){
    return "Number {$number}";
}, $numbers);
print_r($newNumbers);

// filter
$evenNumbers = array_filter($numbers, fn($number) => $number%2 === 0);
print_r($evenNumbers);

// reduce
$sum_first_10 = array_reduce(range(1,10), fn($carry, $number) => $carry + $number);
print_r($sum_first_10);


?>