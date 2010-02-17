<?php

$database = 'test';
$username = 'root';
$password = 'root';

$connect = mysql_connect("localhost", "$username", "$password", "$database")
    OR die(mysql_error());

mysql_select_db("$database")
   OR die(mysql_error());

function create_database_table() {
    $query = ("CREATE TABLE IF NOT EXISTS contacts (
        id INT NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(id),
        name VARCHAR(30) NOT NULL,
        password VARCHAR(32),
        age INT(2))")
    or die(mysql_error());
}

function update_database() {
    mysql_query("INSERT INTO contacts
        (name, password, age) VALUES
        ('".$_POST['name']."', md5('".$_POST['password']."'), '".$_POST['age']."')")
    or die(mysql_error());
}   

?>
