<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Password Generator</title>
</head>
<body>
    <?php echo $m; 
    echo '<br />';
    ?>
    <form method="POST" action="register.php" class='f-wrap-1'>
    
    <fieldset>
    
    <h3>Enter Credentials:</h3>
    <p>This form will generate a username and password pair for use with the monitoring system.</p>
    <p>Please use your standard company username, and define a secure password of at least 8 characters.</p>
    
    <!-- username -->
    <label for='username'>
    <b>username:</b>
    <input type="text" name="username" size="20" class='f-name' tabindex=1 /><br />
    
    <!-- password #1 -->
    <label for='password'>
    <b>password:</b>
    <input type="password" name="password1" size="20" class='f-name' tabindex=2 /><br />
    </label>

    <!-- password #2 -->
    <label for='password'>
    <b>password:</b>
    <input type="password" name="password2" size="20" class='f-name' tabindex=2 /><br />
    </label>

    <div class='f-submit-wrap'>
    <input type="submit" name="submit" value="submit">
    </div>

    </fieldset>

    </form>
</body>
</html>

<?php
$m = '';
if (isset($_POST['submit'])) {

    $valid = true;
    if ($_POST['password1'] != $_POST['password2']) {
        $m.= 'Your passwords do not match. Please try again.';
        $valid = false;
    }

    if (strlen($_POST['password1']) < 8) {
        $m.= 'Your password is too short. Please try again.';
        $valid = false;
    }

    if ( $valid ) {
    $headers =  'From: noreply@part.net' . "\r\n" .
            'Reply-To: noreply@part.net' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    $message = $_POST['username'] . ':{SHA}' . base64_encode(sha1($_POST['password1'], TRUE));

    mail('cedwards@part.net', 'Password Generator', $message, $headers);

    $m.= 'Your new password has been submitted, thank you.';
     }
}
?>
