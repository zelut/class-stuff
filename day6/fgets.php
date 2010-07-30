<?php

$access_log = fopen("access_log", "r");
 
while (!feof($access_log)) {           
    $line = fgets($access_log);        

    if (preg_match("/^kernel:/", $line)) {
        print $line;                     
    }                                    
}                                        

fclose($access_log);

?>
