<?php

$filename = $_FILES['userfile']['name'];
$filesize = $_FILES['userfile']['size'];
print "Received $filename - its size is $filesize";
var_dump($_FILES['userfile']);

?>
