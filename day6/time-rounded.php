<?php

$format = "H:i";
$minutes = 5;
$seconds = strtotime('Now');

$rounded = round($seconds / ($minutes * 60)) * ($minutes * 60);

print date($format, $rounded) . "\n";

?>
