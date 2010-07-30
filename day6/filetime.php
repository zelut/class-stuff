<?php

$contacts = "contacts.txt";
$atime = fileatime($contacts);
$mtime = filemtime($contacts);

$atime_str = date("F jS Y H:i:s", $atime);
$mtime_str = date("F jS Y H:i:s", $mtime);
// eg June 8th 2005 16:04:15
 
print "File last accessed: $atime_str\n";
print "File last modified: $mtime_str\n";

?>
