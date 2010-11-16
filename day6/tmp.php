<?php

$handle = fopen('random.txt','w')
    or die("can't write");

fclose($handle);

?>
