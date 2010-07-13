<?php

    $a = 5;
    $b = $a;

    print $a ."\n";
    print $b ."\n";

    $x = 10;
    $y =& $x;
    $y = 20;

    print $x ."\n";
    print $y ."\n";

?>
