<?php

$filename = "another_file.txt";
$mystring = "The quick brown fox jumped over the lazy dog.\n";

$handle = fopen($filename, "wb");
$numbytes = fwrite($handle, $mystring);
fclose($handle);
print "$numbytes bytes written\n";

?>
