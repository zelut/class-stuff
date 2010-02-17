<?php

$password0 = "hello";
$password1 = "Hello";
$password2 = "hellO";
$password3 = "this is a really long password but it'll be the same length via md5";

$password0_new = md5($password0);
$password1_new = md5($password1); 
$password2_new = md5($password2);
$password3_new = md5($password3);

print $password0_new ."\n";
print $password1_new ."\n";
print $password2_new ."\n";
print $password3_new ."\n";

?>
