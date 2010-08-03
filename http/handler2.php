<?php

    if (!is_string($_POST['name'])) {
        print "Please provide a valid name";
        return 1;
    }
    print "Your name: {$_GET['name']}<br />";
    print "Your password: {$_GET['password']}<br />";
    print "Your age: {$_GET['age']}<br /><br />";
  ?>
