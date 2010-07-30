<?php

$filename = "some-file.txt";

$filename2 = $filename . '.old';
$result = copy($filename, $filename2);
if ($result) {                        
    print "$filename has been copied to $filename2.\n";
} else {                                               
    print "Error: couldn't copy $filename to $filename2!\n";
}

?>
