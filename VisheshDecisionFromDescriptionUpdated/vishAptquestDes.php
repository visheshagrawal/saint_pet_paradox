<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html><head>
  <style>
div {
  width: 1000px;
  height: 500px;
  background-color: white;
  margin-right: auto;
  margin-left: auto;
  padding-left: 30px;
  padding-right: 30px;
  padding-top: 30px;
  /*padding-bottom: 30px;*/
}
</style>
</head>
<body bgcolor="skyblue"><div>
    <p><b>Before you start the task, please answer the following question:<br>
</b>
</p>

<form  method="POST" action="check_aptitude.php"><!-- change database name -->
<label for="aptitude">Q. If you allocated 100,000 Rupees in an option last year and the option incurred a gain of 40% in one year, how much would it be worth after the end of the first year?(Please enter only the amount in numbers)<br></label>
<br><br>
  <label for="aptitude">Amount(Rupees)</label>
    <input type="number" min="0" max="20000000" autocomplete="off" name="aptitude" id="aptitude" required value="aptitude" size="10">

    <br><br><br>
    <input type="submit" value="Next" name="commit"><!-- change value -->
    
</form>
</div>


<?php 
  function random_striings($length_of_string) 
{ 
  
  
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
  

    return substr(str_shuffle($str_result),  
                       0, $length_of_string); 
} 

?>
  


<?php
//$servername = "localhost";
$servername = "localhost";
$username = "acs_vishesh";
$password = "chiyabuddha03";

// Create connection
//$conn = new mysqli($servername, $username, $password,"iit_mandi");
$conn = new mysqli($servername, $username, $password,"acs_spp");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*echo "Con
nected successfully";*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $education = test_input($_POST["education"]);
  $email = test_input($_POST["email"]);
  //echo $email;
  $age = test_input($_POST["age"]);
  $mstatus = test_input($_POST["mstatus"]);
  $gender = test_input($_POST["gender"]);
  $aincome = test_input($_POST["aincome"]);
  $major = test_input($_POST["major"]);
  $occup = test_input($_POST["occup"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function random_strings($length_of_string) 
{ 
  
  
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
  

    return substr(str_shuffle($str_result),  
                       0, $length_of_string); 
} 
// echo $age." age ".$education." education ".$email." email ".$mstatus." mstatus ".$gender." gender ".$aincome." aincome ".$major." major ".$occup." occup ";

$var=random_strings(20);
//echo $var;
$_SESSION['var']=$var;
//echo $_SESSION['var']."<br>";

$sql="INSERT INTO demographics_des(ID,Age, Gender, Education, Major, Occupation, Marriage,Income,Email) VALUES ('$var','$age','$gender','$education','$major','$occup','$mstatus','$aincome','$email')";

if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

</body>
</html>