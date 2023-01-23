<?php
// for loop
echo "For loop\n";
for ($i=0; $i<10; $i++) {
    echo "{$i} ";
}

// while loop
echo "\nWhile loop\n";
$count = 0;
while ($count < 5) {
    echo "{$count} ";
    $count++;
}

// do-while loop
echo "\nDo while loop\n";
do {
    echo "{$count} ";
    $count--;
} while ($count > 0);

$posts = ['first post', 'second post', 'third post', 'fourth post'];

// usual array looping with for-loop
for ($i=0; $i<count($posts); $i++) {
    echo "{$posts[$i]}<br>";
}

// now with foreach loop
/*
foreach loop syntax
foreach ($array as $value) {
    // whatever statement
}
*/
foreach ($posts as $post) {
    echo "{$post} <br>";
}
// we can also get index in foreach loop
foreach ($posts as $index => $post) {
    echo "{$index} - {$post} <br>";
}


// foreach works with Associative arrays well too
$person = [
    'first_name' => 'John',
    'last_name' => 'Travolta',
    'age' => 60
];
foreach ($person as $index => $value) {
    echo "{$index} -> {$value} <br>";
}
