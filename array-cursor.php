<?php

$array = array("Foo", "Bar", "", "Wom", "Bat");
//print end($array) ."\n";

while($val = next($array)) {
    print $val ."\n";
}

?>
