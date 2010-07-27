<?php

    $age = 9;

    $agestr = ($age < 16) ? 'child' : 'adult';
    print $agestr."\n";
?>

<?php
    if ($age < 16) {
        $agestr = 'child';
        print $agestr."\n";
    } else {
        $agestr = 'adult';
        print $agestr."\n";
    }
?>
