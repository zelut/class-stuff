<?php

$huge_file = fopen("LICENSE", "r");

while (!feof($huge_file)) {
    print fread($huge_file, 8);
}

fclose($huge_file);

?>
