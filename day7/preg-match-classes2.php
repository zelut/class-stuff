<?php

if (preg_match("/[^a-z]esting/", "100000testing")) {
    print "Got match!\n";
} else {
    print "Doesn't match.\n";
}

?>
