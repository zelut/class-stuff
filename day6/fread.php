<?php

$huge_file = fopen("VERY_BIG_FILE", "r");
 
while (!feof($huge_file)) {
    print fread($huge_file, 1024);
}

fclose($huge_file);

?>
