<p>Please confirm your information</p>

<form action="thankyou.php" method="post">
username: <input type="text" name="username" maxlength="8" value="<?php print $_POST['username']; ?>" /><br />
password: <input type="password" name="password" maxlength="8" value="<?php print $_POST['password']; ?>" /><br />
Life story:<br /><textarea name="story" rows="10" cols="80">
<?php print $_POST['story']; ?></textarea><br /><br />

<?php
foreach ($_POST['languages'] as $val) {
    print "<input type='checkbox' name='languages[]' value=$val checked='checked' /> $val";
}
?>
<br /><input type="submit" value="Confirm" />
</form>
