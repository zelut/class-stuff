<?php

$inifile = parse_ini_file("my.ini");
var_dump($inifile);                 
$inifile = parse_ini_file("my.ini", true);
var_dump($inifile);

?>
