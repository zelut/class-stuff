<?php

$filename = "new_file.txt";

$myarray[] = "This is line one";
$myarray[] = "This is line two";
$myarray[] = "This is line three";
$mystring = implode("\n", $myarray);
$numbytes = file_put_contents($filename, $mystring);
print "$numbytes bytes written\n";

?>
