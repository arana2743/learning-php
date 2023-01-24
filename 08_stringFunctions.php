<?php
$string = 'Hello World of PHP';

// strlen() - find length of string
echo strlen($string) . '<br>';

// strpos() - find the position of first occurrence of substring
echo strpos($string, 'o') . '<br>';

// strrpos() - find the positio of last occurrence of substring 
echo strrpos($string, 'o') . '<br>';

// strrev() - reverse a string
echo strrev('Hello') . '<br>';

// strtolower() - convert all characters to lowercase
echo strtolower("THIS WILL BE IN LOWERCASE") . '<br>';

// strtoupper() - convert all characters to uppercase
echo strtoupper('it is time!') . '<br>';

// ucwords() - uppercase first letter of each word
echo ucwords('this will be first uppercase on all words') . '<br>';

// str_replace() - replace a word in string from another
echo str_replace('PHP', 'Javascript', $string) . '<br>';

// substr() - returns a part of string, specified by offset and length
echo substr($string, 0, 5) . '<br>';
echo substr($string, 11) . '<br>';

// str_starts_with - check if string starts with a word/character
if (str_starts_with($string, 'H')) {
    echo "Yes given string {$string} does starts with H.<br>";
}

// str_ends_with
if (str_ends_with($string, 'PHP')) {
    echo "Yes given string <em>{$string}</em> does ends with <em>PHP</em><br>";
}

// htmlspecialchars() - helps with parsing html or javascript code without rendering it
echo htmlspecialchars('<script>alert("Hello")</script>') . '<br>';

// formatted strings
printf("%s likes to %s <br>", 'John', 'dream');
printf("199x198=%d and 198/11=%f", 199*198, 198/11);

?>