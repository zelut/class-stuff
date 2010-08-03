<?php

if (is_uploaded_file($somefile)) {
    copy($somefile, "/var/www/userfiles/$somefile");
}

?>
