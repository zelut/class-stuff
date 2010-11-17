<?php

if (preg_match("/[^a-z]esting/i", "Testing")) {
    print "Got match!\n";
} else {
    print "Doesn't match.\n";
}

?>
