<?php
// simple arrays
// way 1 to declare
$arr1 = [1,2,3,4,5];
// way 2  to declare
$arr2 = array("apple", "banana", "orange");

print_r($arr1);
var_dump($arr2);

// Associative array
// wherein indexes of elements can be customized to be any datatype such as strings etc.
$color = [
    1 => 'green',
    2 => 'black',
    4 => 'red',
    10 => 'pink'
];

var_dump($color);

$hex = [
    "red" => '#f00',
    "blue" => '#0f0',
    "green" => '#00f'
];

var_dump($hex['red']);

$person = [
    'first_name' => 'John',
    'last_name' => 'Dee',
    'email' => 'johndee@gmail.com'
];

print_r($person['email']);

// mutli-dimensional array
$people = [
    [
        'first_name' => 'John',
        'last_name' => 'Dee',
        'email' => 'johndee@gmail.com',
        'age' => 35
    ],
    [
        'first_name' => 'Nicolas',
        'last_name' => 'Cage',
        'email' => 'nick@gmail.com',
        'age' => 55
    ],
    [
        'first_name' => 'Chota',
        'last_name' => 'Bheem',
        'email' => 'chutki@gmail.com',
        'age' => 18
    ]
];

echo $people[2]['last_name'];
// encoding the array of people into JSON object array
var_dump(json_encode($people));

// decode from JSON
$jsonobj = '{"first_name":"John","last_name": "Travolta","email":"johnt@gmail.com"}';
var_dump(json_decode($jsonobj));

?>