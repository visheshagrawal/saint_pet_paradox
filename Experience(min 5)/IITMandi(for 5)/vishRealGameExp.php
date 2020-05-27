<?php
session_start();
$newvar=$_SESSION['var'];
?>
<!DOCTYPE=html>
<html><head>
<style>
div {
  width: 750px;
  height: 200px;
  /*float: left;*/
  background-color: white;
  margin-right: auto;
  margin-left: auto;
  padding-left: 30px;
  padding-right: 30px;
  padding-top: 30px;
  text-align: center;
  /*padding-bottom: 30px;*/
}
  button{
    /*margin-top: 20px;*/
    border-radius: 25px;
    margin-left:400px;
    /*width: 250px;*/
    width:150px;
    float:left;
    height: 50px;
  line-height: 60px;
  font-weight: bold;
  /*padding: 0 40px;*/
  /*padding left:30px;*/
  background: tomato;
  border: none;
  display:inline-block;
  }
   
</style>
</head>
<body bgcolor="skyblue">
        <div>
<center><h1 style="color:midnightblue;">FINAL-CHOICE PHASE </H1></center>
           <left>             Now, please play the game for real by clicking the red button multiple times till the game ends. 
                        <br><br>
</left>


<?php
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Amount = test_input($_POST["Amount"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
echo $Amount." amount ";

$sql="INSERT INTO real_game_exp5(ID,Amount) VALUES ('$newvar','$Amount')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//echo $Amount." Amount added";

?>
<br><br><br><br><br><br><br>
<script>
function roundTo(n, digits) {
    var negative = false;
    if (digits === undefined) {
        digits = 0;
    }
        if( n < 0) {
        negative = true;
      n = n * -1;
    }
    var multiplicator = Math.pow(10, digits);
    n = parseFloat((n * multiplicator).toFixed(11));
    n = (Math.round(n) / multiplicator).toFixed(2);
    if( negative ) {    
        n = (n * -1).toFixed(2);
    }
    return n;
}

var value=2;
var set = 2;
var count=0;
var final=0;
var val=0;
var rand=0;
var am = " <?php echo $Amount ?>";
// 1. Create the button
var button = document.createElement("button");
 button.innerHTML = "Click to toss the coin";

// 2. Append somewhere
var body = document.getElementsByTagName("body")[0];
body.appendChild(button);
// 3. Add event handler
button.addEventListener ("click", mathprob);

  //0. Random function

  function mathprob(){
rand=Math.random();
     //HEADS
      if (rand<=0.5){
rand=roundTo(rand,3);
        value=2*value;
        document.getElementById("demo").innerHTML = "Heads: Your money just got doubled!Your total money now is"+" Rupees "+value;
       }
       //TAILS
      else{
rand=roundTo(rand,3);
        document.getElementById("demo").innerHTML = "Tails: Game over!You win Rupees "+value;
        final=value;
        if(value!=2){
        val=value/2;
        val=1/(value);}
        else{
          val=0.5;
        }
        //window.location.href = "thankyoupage.php?win="+value+"&prob"+val+"&Amount"+am; 
        // window.location.href = "thankyoupage.php?win+=" + value; 
        // window.location.href = "thankyoupage.php?prob=" + val;
        // window.location.href = "thankyoupage.php?Amount=" + am; 
        //value=set;
         var timer = setTimeout(function(){window.location="thankyoupageExp.php?win="+value+ "&random=" + rand}, 300);    
     }
        //<p>Game over You will be redirected in 1 second</p>
    }

</script></div><div>
<b><br><br><p id="demo"></p></b>


              <!--   <form method="POST" action='thankyoupage.php'>
                       <div class="top prominent">
                                <br>
                                <input type="submit" value="Next &gt;" name="commit">
                        </div>
                </form>
            </article> -->

</div>
</body>
</html>


