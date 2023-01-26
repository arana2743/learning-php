<?php
/*
cookies are a mechanism for storing data in remote browser and thus tracking or identifying return users. 
You can set specific data to be stored in the browser, and then retrieve it when the user visit the site again.
*/
// set a cookie
setcookie('name', 'Franklin', time() + 10);

if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

// unset a cookie
setcookie('name', '', time() - 10);
?>