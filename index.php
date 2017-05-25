<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>Selected User</title>
</head>
<body>
<?php

require_once 'connect.php';
$sql_select = "SELECT id, name FROM clients";
$result = mysqli_query($sql_select);
$row = mysqli_fetch_array($result);
do
{

	printf("<p>User name: " .$row['id'] . "  -  " ."Sponsor: " .$row['name'] . "</p>---------<br/>"



	);
}
while($row = mysqli_fetch_array($result));
         ?>

</body>
</html>
