<?php

$zipfile = fopen("data.zip", "r");
 
if (fread($zipfile, 2) != "PK") { 
        print "data.zip is not a valid Zip file!\n";
    } else {
        print "data.zip appears to be a valid Zip file.\n";
}

fclose($zipfile);

?>
