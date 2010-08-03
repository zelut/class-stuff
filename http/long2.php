<form action="long3.php" method="post">
Life story:<br /><textarea name="story" rows="10" cols="80">
Enter your life story here</textarea><br /><br />
<br /><input type="Submit" value="Next" />
<input type="hidden" name="username" value="<?php print $_POST['username']; ?>" />
<input type="hidden" name="password" value="<?php print $_POST['password']; ?>" />
</form>

