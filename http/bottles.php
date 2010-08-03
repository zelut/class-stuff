<?php

$bottles = 99;

while ($bottles > 0) {

$first = "$bottles bottles of beer on the wall.\n";
$second = "$bottles bottles of beer. take one down, pass it around.\n";

    print $first;
    print $second;
    $bottles = $bottles - 1;
    //print "$bottles bottles of beer on the wall.\n";
}

?>
