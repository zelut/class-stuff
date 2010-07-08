<?php

$myarray[] = 'one';
$myarray[] = 'two';
$myarray[] = 'three';
$myarray[] = 'four';

print "This only prints values\n";
print "\n";
foreach ($myarray as $val) {
    print $val ."\n";
}

print "\nThis prints keys AND values\n";
print "\n";
foreach ($myarray as $key => $val) {
    print "$key : $val \n";
}

?>
