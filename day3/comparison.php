<?php

$a = 5;
$b = "5";

$c = "string";
$d = "string";

if ($a === $b) {
    print "identical\n";
} else {
    print "not identical\n";
}

if ($c === $d) {
    print "identical\n";
} else {
    print "not identical\n";
}

if ($c == "String" || $d == "string") {
    print "yay!\n";
} else {
    print "not\n";
}

?>
