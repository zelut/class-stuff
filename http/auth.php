<?php

    // this may not work the way you expect
    if (!isset($_POST['username'])) {
        header("Location: login.php");
    }

    var_dump($_POST['username']);
?>
