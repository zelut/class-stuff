<?php

define("BINARY", "Save was binary");
$inifile = parse_ini_file("config.ini");
var_dump($inifile);
echo "\n";
$inifile = parse_ini_file("config.ini", true);
var_dump($inifile);

?>
