<?php
function registerUser($name) {
    echo "You are now registered {$name}!";
}

registerUser('John');

// functions with return value
function add($n1, $n2) {
    return $n1 + $n2;
}

echo add(1,2);

// anonymous functions
$subtract = function($n1, $n2) {
    return $n1 - $n2;
};

echo $subtract(100, 20);

// arrow function - used when we have single line return
$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(10, 20);
?>