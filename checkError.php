<!DOCTYPE HTML>  
<html>
<head>
<style>
<!--.error {color: #FF0000;}-->
</style>
</head>
<body> 
<?php

// define variables for Errors if empty fields
$sponsorErr = $firstnameErr = $lastnameErr = $emailErr = $selectCountryErr = $cityErr
= $adressErr = $zipCodePostalCodeErr = $areaCodeErr = $phoneErr = $companyErr = $genderErr = "";

//If it isempty, an error message is stored in the different error variables, 
//and if it is not empty, it sends the user input data through 
//the test_input() function

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sponsor"])) {
    $sponsorErr = "Sponsor is required";
  } else {
    $sponsor = test_input($_POST["sponsor"]);
  }

  if (empty($_POST["firstname"])) {
    $firstnameErr = "Firstname is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
  }
  if (empty($_POST["lastname"])) {
    $lastnameErr = "Lastname is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["selectcountry"])) {
    $selectCountryErr = "Country is required";
  } else {
    $selectCountry = test_input($_POST["selectcountry"]);
  }

  if (empty($_POST["city"])) {
    $cityErr = "City is required";
  } else {
    $city = test_input($_POST["city"]);
  }
  if (empty($_POST["adress"])) {
    $adressErr = "Adress is required";
  } else {
    $adress = test_input($_POST["adress"]);
  }

  if (empty($_POST["zipcodepostalcode"])) {
    $zipCodePostalCodeErr = "Zip code is required";
  } else {
    $zipCodePostalCode = test_input($_POST["zipcodepostalcode"]);
  }
  if (empty($_POST["areacode"])) {
    $areaCodeErr = "";
  } else {
    $areaCode = test_input($_POST["areacode"]);
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }
  if (empty($_POST["company"])) {
    $companyErr = "";
  } else {
    $company = test_input($_POST["company"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  //function test_input($data) {
  //$data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  //return $data;
//}
}
?>
<h2>Form Validation</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Sponsor: <input type="text" name="sponsor">
  <span class="error">* <?php echo $sponsorErr;?></span>
  <br><br>
  Firstname: <input type="text" name="firstname">
  <span class="error">* <?php echo $firstnameErr;?></span>
  <br><br>
  Lastname: <input type="text" name="lastname">
  <span class="error">* <?php echo $lastnameErr;?></span>
  <br><br>
  Emal: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Select Country: <input type="text" name="selectcountry">
  <span class="error">* <?php echo $selectCountryErr;?></span>
  <br><br>
  City: <input type="text" name="city">
  <span class="error">* <?php echo $cityErr;?></span>
  <br><br>
   Adress: <input type="text" name="adress">
  <span class="error">* <?php echo $adressErr;?></span>
  <br><br>
  Zip Code/Postal Code: <input type="text" name="zipcodepostalcode">
  <span class="error">*<?php echo $zipCodePostalCodeErr;?></span>
  <br><br>
  Area code: <input type="text" name="areacode">
  <span class="error"><?php echo $areaCodeErr;?></span>
  <br><br>
  Phone: <input type="text" name="phone">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  Company: <input type="text" name="company">
  <span class="error"><?php echo $companyErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
//displayed the results of input
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
?>

   


</body>
</html>  

