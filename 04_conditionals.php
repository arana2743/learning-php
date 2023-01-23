<?php
/*
Common operators
'<' - less than
'>' - greater than
'<=' - less than or equal to
'>=' - greater than or equal to
'==' - equal to
'===' - identical to
'!=' - not equal to
'!==' - not identical to
*/
/*
Conditionals:
1. if-else
2. ternary operator
3. null coallescing
4. switch statements
*/
$age = 17;

if ($age >= 18) {
    echo "You can vote";
} else {
    echo "Sorry, you can't vote.";
}

$t = date("H"); // get hour of the day

if ($t < 12) {
    echo "Good morning";
} else if ($t >= 12 && $t <=20) {
    echo "Good afternoon";
} else {
    echo "Good evening";
}

// ternary operator
$posts = ['first post', 'second post', 'third post'];
$first_post = !empty($posts) ? $posts[0] : 'No Posts';

echo $first_post;

// null coallescing operator
$second_post = $posts[10] ?? "Empty post";
echo $second_post;

// switch statements
$color = 'reddd';
switch($color) {
    case 'red':
        echo 'Color chosen is red.';
        break;
    case 'blue':
        echo 'Color chosen is blue.';
        break;
    case 'green':
        echo 'Color chosen is green.';
        break;
    default:
        echo 'Some other selection of color is done.';
}

?>