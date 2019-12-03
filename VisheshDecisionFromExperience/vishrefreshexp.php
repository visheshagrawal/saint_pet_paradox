

<?php

session_start();
$newvar=$_SESSION['var'];
echo $newvar;
$_SESSION['var']=$newvar;

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


$win=$_GET['win'];
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
$uniqid = $_SESSION['uid'];
//echo $Amount." amount ";
echo "<strong>Amount won: ".$win." rupees</strong>";


$sql="INSERT INTO sim_game_exp(ID,Winnings,Probability) VALUES ('$newvar','$win','$prob')";

// $sql="UPDATE `sim_game_exp` SET `RealWinnings` ='$win' , `Probability`='$prob' , `ID`='$newvar' ORDER BY `S.NO` DESC LIMIT 1";
if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}




header("Location:vishDecbyExp.php");
        exit();
?>
