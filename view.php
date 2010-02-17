<html>
<head>
<title>Database Entries</title>
</head>
<body>
<center>

<?php

require_once("db.inc.php");

$result = mysql_query("SELECT * FROM contacts")
    or die(mysql_error());

while ($row = mysql_fetch_array($result)) {
    echo "username : " .$row['name'] ."<br />";
    echo "password : " .$row['password'] ."<br />";
    echo "age : " .$row['age'] ."<br />";
    echo "<br />";
}

?>
</center>
</body>
</html>
