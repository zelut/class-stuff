<?php

//$basicarray = array('one', 'two', 'three', 'four');
$basicarray[] = "one";
$basicarray[] = "two";
$basicarray[] = "three";
$basicarray[] = "four";

// print basic array
//print $basicarray[1] ."\n";


//$assocarray = array('name'=>'Frank', 'age'=>'25', 'state'=>'UT');
$assocarray['name'] = 'Frank';
$assocarray['age'] = '25';
$assocarray['state'] = 'UT';

// print associative array
//print $assocarray['name'] ."\n";

$multiarray['Families']['Jones'] = array("Father"=>"George", "Mother"=>"Susan", "Kids"=>"5");
$multiarray['Families']['Stephenson'] = array("Father"=>"John", "Mother"=>"Beth", "Kids"=>"2");

// print multidimensional array
print $multiarray['Families']['Jones'] ."\n";

var_dump($multiarray);

?>
