<?php 
/*
File handling is the ability to read and write files on the server.
PHP has built in functions for reading and writing files.
*/
$file = 'extras/users.txt';

// file_exists() - check if files exists
if (file_exists($file)) {
    echo 'file exists';

    // reading file contents in one go
    // echo readfile($file);

    // reading file with handle
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    echo 'file is not available';

    // creating a file then
    $handle = fopen($file, 'w');
    $contents = 'Johnny' . PHP_EOL . 'Dean' . PHP_EOL . 'Sammy' . PHP_EOL . 'Michael';
    fwrite($handle, $contents);
    fclose($handle);
}
?>