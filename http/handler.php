<?php

if (is_writeable('archive.txt')) {
    $filename = 'archive.txt';
} else {
    $filename = '/tmp/archive.txt';
}

$fh = fopen($filename,"at") or die("EPIC FAIL AT OPEN!");
$numbytes = fwrite($fh, "{$_POST['shit']}<br />") or die("EPIC FAIL AT WRITE");
fclose($fh);

$filearray = file($filename);
$random = array_rand($filearray);
print $random;
print $filearray[$random] ."<br />";

?>
