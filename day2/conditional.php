<?php
    $salary = 15000;

    if ($salary > 100000) {
        print "I'll take it!\n";
    } elseif ($salary > 80000) {
        print "I think I'll survive\n";
    } elseif ($salary > 75000) {
        print "I'll make do..\n";
    } elseif ($salary < 20000) {
        print "...are you serious!\n";
    } else {
        print "I'll keep looking\n";
    }
?>
