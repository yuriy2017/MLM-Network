 <html>
<body>
    <h2>Form Validation</h2>
    
<!-- Script not load the next file index.php (stay here)and 
htmlspecialchars() function converts special characters to HTML entities
-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  

    
<form action="index.php" method="post">
Sponsor: <input type="text" name="sponsor"><br>
Firstname: <input type="text" name="firstname"><br>
Lastname: <input type="text" name="lastname"><br>
Email: <input type="text" name="email"><br>
Select_country: <input type="text" name="selectcountry"><br>
City: <input type="text" name="city"><br>
Adress: <input type="text" name="adress"><br>
Zip_code_postal_code: <input type="text" name="zipcodepostalcode"><br>
Area_code: <input type="text" name="areacode"><br>
Phone: <input type="text" name="phone"><br>
Company: <input type="text" name="company"><br>
Gender: <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male

<input type="submit">
</form>

</body>
</html> 
