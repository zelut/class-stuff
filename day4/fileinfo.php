<?php

// This uses the simple function pathinfo() to parse the information
// related to a filename. This output, using var_dump() will be
// presented in an array format you'll likely be familiar with.

// As an exercize, use test.txt and also the full path to the file.

$fileinfo = pathinfo("test.txt");

var_dump($fileinfo);

?>
