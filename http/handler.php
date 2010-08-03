<?php

if (!empty($_GET['name'])) {
    print "Your name: {$_GET['name']}<br />";
    print "Your password: {$_GET['password']}<br />";
} else {
    print "Your name: {$_POST['name']}<br />";
    print "Your password: {$_POST['password']}<br />";
} 

?>
