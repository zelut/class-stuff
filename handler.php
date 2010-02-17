<?php

require_once("db.inc.php");

if (isset($_POST['name'])) {
    print "Your name: {$_POST['name']}<br />";
} else {
    print "Wrong!<br />";

  print "Your password: {$_POST['password']}<br />";
  print "Your age: {$_POST['age']}<br /><br />";

//update_database();
?>

<!--<center><a href="view.php">View Database Entries</a></center>-->

