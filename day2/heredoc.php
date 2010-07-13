<?php

$variables = "something random";

$mystring = <<<ENDOFTHELINE
    This is a heredoc. I can do whatever I like in here.
    I can add extra     whitespace.
    I can call $variables, even if they aren't defined.
    What do you think will happen to the \$variable above?
    I can even say ENDOFTHELINE and nothing will happen...
    unless I say it right\n
ENDOFTHELINE;

print $mystring;

?>
