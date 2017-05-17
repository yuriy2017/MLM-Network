<?php
mysql_connect("localhost", "root", "")//Parameters in parentheses ("host", "username", "password)
or die("<p>Error connecting to database! " . mysql_error() . "</p>");

mysql_select_db("gccbasa")//Parameter in parentheses ("the name of the database to which we connect")
 or die("<p>Database selection error! ". mysql_error() . "</p>");
?>