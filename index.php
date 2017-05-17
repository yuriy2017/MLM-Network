<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Selected User</title>
</head>
<body>
<?php
require 'connect.php';
$sql_select = "SELECT id, name FROM users";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);
do
{

	printf("<p>User name: " .$row['id'] . "  -  " ."Sponsor: " .$row['name'] . "</p>---------<br/>"



	);
}
while($row = mysql_fetch_array($result));
         ?>

</body>
</html>



