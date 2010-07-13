<?php

    // global scope: 200
    $a = 10;
    $b = 20;
    
    function doMultiplication() {
        // local scope: 500
        //$a = 50;
        //$b = 10;

        print $a * $b ."\n";
    }

    // printing local scope
    doMultiplication();

    // printing global scope
    print "\n";
    print $a * $b ."\n";
?>
