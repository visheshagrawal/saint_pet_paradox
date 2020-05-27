<?php
session_start();
$newvar=$_SESSION['var'];
?>
<?php
$str_var = $_GET["str_var"];
$array_var = json_decode($str_var);

$random_var = $_GET["random_var"];
$random_var = json_decode($random_var);

for($i=0;$i<count($array_var);$i++){
    echo $array_var[$i];
    echo " ";
}
for($i=0;$i<count($random_var);$i++){
    echo $random_var[$i];
    echo " ";
}

?>

<?php


$con = mysqli_connect("localhost","acs_vishesh","chiyabuddha03","acs_spp");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
else{
    echo "Hello";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$uniqid = $_SESSION['uid'];

    //$newvar=1;
    
    for($i=0;$i<count($random_var);$i++){
        $prob=0;
        if($$array_var[$i]!=2){
	$prob=2/$array_var[$i];
        }
        else{
	$prob=0.5;
        }
        $sql="INSERT INTO sim_game_exp5(ID,Probability,Winnings,RGN) VALUES ('$newvar','$prob','$array_var[$i]','$random_var[$i]')";

        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
}
header("Location:vishAmountExp.php");
        exit();
?>