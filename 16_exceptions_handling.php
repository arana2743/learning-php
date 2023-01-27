<?php
function inverse($x) {
    if (!$x) {
        throw new Exception("Divide by zero");
    }

    return 1/$x;
}

try {
    echo inverse(5) . '<br>';
    echo inverse(0) . '<br>';
} catch (Exception $e) {
    echo 'Caught exception: ' . $e->getMessage() . '<br>';
} finally {
    echo 'this always gets executed. <br>';
}


?>