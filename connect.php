<?php
//connect to datebase





$con = new PDO('mysql: host=localhost; dbname = clients', $root, $pass);

//$con = mysqli_connect("localhost", "root", "", "clients" );//Parameters in parentheses ("host", "username", "password)
//$mysql_set_charset = mysql_set_charset ($con, "utf-8");
//mysql_select_db($clients, $con);
//or die("<p>Error connecting to database! " . mysqli_error() . "</p>");
//if  (mysqli_connect_errno) {
  // echo "Failed to connect to MySQL!" .mysqli_connect_error(); 
//}
   //make query 
//$query = "SELECT * FROM clients;";
$result = mysqli_query($con, "SELECT * FROM clients");
//$count = mysql_num_rows($result);
//echo $count;

    
//work with results
//while ($row = mysql_fetch_array($result)) {
   //... 
//}
 //mysql_select_db("clients")//Parameter in parentheses ("the name of the database to which we connect")
 //or die("<p>Database selection error! ". mysql_error() . "</p>");
