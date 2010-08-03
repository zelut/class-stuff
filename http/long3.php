<form action="someform.php" method="post">
<input type="checkbox" name="languages[]" value="PHP" checked="checked" /> PHP
<input type="checkbox" name="languages[]" value="Perl" /> Perl
<input type="checkbox" name="languages[]" value="Python" /> Python
<input type="checkbox" name="languages[]" value="Java" /> Java
<br /><input type="submit" value="Finish" />
<input type="hidden" name="username" value="<?php print $_POST['username']; ?>" />
<input type="hidden" name="password" value="<?php print $_POST['password']; ?>" />
<input type="hidden" name="story" value="<?php print $_POST['story']; ?>" />
</form>
