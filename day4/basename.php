<?php

$filename = basename("/home/cedwards/Projects/class/day4/test.txt");
print $filename ."\n";
$filename = basename("/home/cedwards/Projects/class/day4/test.txt", ".php");
print $filename ."\n";
$filename = basename("/home/cedwards/Projects/class/day4/test.txt", ".txt");
print $filename ."\n";

?>
