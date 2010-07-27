<?php

function doMultiplication() {
    $a = 5;
    $b = 10;
    
    $result = $a * $b;
    
    return $result;

    print "extra stuff, after the function\n";
}

print doMultiplication() ."\n";

?>
