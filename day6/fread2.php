<?php

$zipfile = fopen("data.zip", "r");
 
if (fread($zipfile, 2) != "PK") { 
    print "Data.zip is not a valid Zip file!\n";
}                                             

fclose($zipfile);

?>
