<?php 
session_start();
error_reporting(0);
?>
<!DOCTYPE=html>
<html><head>
<style>
div {
  width: 750px;
  height: 300px;
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
<body bgcolor="skyblue">
  <div>
<center><h1 style="color:midnightblue;">FEEDBACK</H1></center>
<?php

session_start();
$newvar=$_SESSION['var'];
$servername = "localhost";
$username = "acs_vishesh";
$password = "chiyabuddha03";

// Create connection
$conn = new mysqli($servername, $username, $password,"acs_spp");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*echo "Con
nected successfully";*/
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $Amount = test_input($_POST["Amount"]);
//   }
function random_strings($length_of_string) 
{ 
  
  
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
  

    return substr(str_shuffle($str_result),  
                       0, $length_of_string); 
} 

$otp=random_strings(6);
//echo $otp;

$win=$_GET['win'];
$rand=$_GET['random'];
$prob=0;
//$am=$_GET['Amount'];

if($win!=2){
	$prob=2/$win;
}
else{
	$prob=0.5;
}

//echo $win." ";
//echo $prob;
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//echo $Amount." amount ";
//echo $otp;
echo "Based upon your game play, you won<br><br><font size='5' > <strong> INR ".$win." </strong></font>";
echo "<br><br>Your Amazon MTurk code is: <b>$otp</b>. Please copy and paste this code on the Amazon MTurk advertisement page for receiving your payment." ;
$sql="UPDATE `real_game_exp5` SET `RealWinnings` ='$win' , `Probability`='$prob' , `ID`='$newvar' , `RGN`='$rand' , `OTP`='$otp' ORDER BY `S.NO` DESC LIMIT 1";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<p>
<br>
Thank you for playing this game and contributing to our research!
</p>





</div>
</body></html>

