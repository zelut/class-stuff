<?php

$filename = "some-file.txt";

$filename2 = 'some-new-file.txt';

$result = @rename($filename, $filename2);
if ($result) {                          
    print "$filename has been renamed to $filename2.\n";
} else {                                                
    print "Error: couldn't rename $filename to $filename2!\n";
}

?>
