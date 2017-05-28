<?php
 

 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "client";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE client (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
sponsor VARCHAR (30)NOT NULL,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
select_country VARCHAR(30),
city VARCHAR(30),
adress VARCHAR(50),
zip_code_postal_code VARCHAR(50),
area_code VARCHAR(50),
phone VARCHAR(30),
company VARCHAR(50),
gender VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table client created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

//update a new client

$sql = "INSERT INTO client (id, sponsor, firstname, lastname, email, 
    select_country, city, adress, zip_code_postal_code, area_code, phone,
    company, gender, reg_date)
VALUES ('1', 'First', 'John', 'Doe', 'john@example.com', 'Poland', 'Warsaw', 
'Doe 23', '1234', '123345', '777 77 77', 'GCC', 'Male', '2017-05-27')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();






