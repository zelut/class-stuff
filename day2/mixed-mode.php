<?php
    // all PHP
    $x = 1;

    if ($x == 1) {
        print "Foo\n";
        print "Bar\n";
        print "Baz\n";
    }
?>

<?php
    // code islands

    $y = 1;

    if ($y == 1) {
?>
        <p>foo</p>
        <p>bar</p>
        <p>baz</p>
<?php
    }
?>
