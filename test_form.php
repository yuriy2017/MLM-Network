<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  


<?php
require_once 'checkError.php';



// define variables and set to empty values
$sponsor = $firstname = $lastname = $email = $selectCountry = $city = $adress =
        $zipCodePostalCode = $areaCode = $phone = $company = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $sponsor = test_input($_POST["sponsor"]); 
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $email = test_input($_POST["email"]);
  $selectCountry = test_input($_POST["selectcountry"]);
  $city = test_input($_POST["city"]);
  $adress = test_input($_POST["adress"]);
  $zipCodePostalCode = test_input($_POST["zipcodepostalcode"]);
  $areaCode = test_input($_POST["areacode"]);
  $phone = test_input($_POST["phone"]);
  $company = test_input($_POST["company"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!--  
<h2>Form Validation</h2>
    
<!-- Script not load the next file index.php (stay here)and 
htmlspecialchars() function converts special characters to HTML entities

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
 --> 
 
<?php
/*displayed the results of input
echo "<h2>Your Input:</h2>";
echo $sponsor;
echo "<br>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $email;
echo "<br>";
echo $selectCountry;
echo "<br>";
echo $city;
echo "<br>";
echo $adress;
echo "<br>";
echo $zipCodePostalCode;
echo "<br>";
echo $areaCode;
echo "<br>";
echo $phone;
echo "<br>";
echo $company;
echo "<br>";
echo $gender;
 * 
 */
?>

</body>
</html>    

