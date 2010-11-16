<?php

if (print preg_match("/Windows (([0-9][0-9]+|Me|XP)|Codename (Whistler|Longhorn))/", "Windows Codename Whistler")) {
    print "Got match!\n";
} else {
    print "No match.\n";
}

?>
