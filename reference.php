<?php

$a = 1;

function assignByValue($a) {
    $a = $a + 1;
    echo "This affected the value of $a\n";
}

echo "This is $a again...\n";

function assignByReference(&$a) {
    $a = $a + 1;
    echo "This affected $a\n";
}

echo "This is new $a\n";

assignbyValue($a);
assignbyReference($a);

?>
