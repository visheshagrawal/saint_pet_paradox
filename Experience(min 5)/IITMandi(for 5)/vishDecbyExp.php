<?php
// Start the session
session_start();
?>
<!DOCTYPE html><html><head>
<style>
div {
  width: 750px;
  height: 300px;
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
.error{
  color: red;
}
  button{
    margin-top: 50px;
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

  button-2{
    margin-top: 20px;
    margin-bottom: 10px;
    border-radius: 25px;
    margin-left:550px;
    width: 150px;
    height: 50px;
    float: left;
  line-height: 60px;
  font-weight: bold;
  /*padding: 0 40px;*/
  background: limegreen;
  border: none;
  display: none;

  }

  button-3{
    margin-top: 30px;
    margin-bottom: 10px;
    border-radius: 25px;
    margin-left:300px;
    width: 150px;
    height: 50px;
    float: left;
  line-height: 60px;
  font-weight: bold;
  /*padding: 0 40px;*/
  background: grey;
  border: none;
  display: none;

  }
  
</style>
</head>
<body bgcolor="skyblue">
  <div>
    <center><h1 style="color:midnightblue;">SAMPLING-PHASE</H1></center>
    

<left>In the sampling phase, you can toss the coin below (the red button) as many times as you desire to find out the earnings from the game. Getting a head will increase your earnings and getting a tale will end the game. In the sampling phase, each outcome you get in the coin toss will not affect your final earnings from the game. In each game, you start with an initial amount of INR 2. Once your game is over, you may play the game again upon clicking the green reset button. Once you are satisfied with your game play, you may play for real by clicking the “Play for real” button (you need to toss the coin at least once before you can play the game for real). Once you click the “Play for real” button, you will be taken to the final-choice phase where you will be asked to play this game for real. 
</left>
<br><br><br><br>
<!-- <button type="button" onclick="alert('You pressed the button!')">Click me!</button> -->
<!-- <div class="padding">
  <center><b><font size="6">Toss the Coin</font></b></center>
</div> -->

<?php 
session_start();
$newvar=$_SESSION['var'];
?>

<?php

function reeset(){

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


$sql="INSERT INTO sim_game_exp(ID,Probability,Winnings) VALUES ('$newvar',)";

if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}//function closes

?>

 
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
function toggle(){
  var myBtn = document.getElementById('myBtn');

    // get the current value of the clock's display property
    var displaySetting = myBtn.style.display;

    // also get the clock button, so we can change what it says
    //var clockButton = document.getElementById('clockButton');

    // now toggle the clock and the button text, depending on current state
    if (displaySetting == 'block') {
      // clock is visible. hide it
      myBtn.style.display = 'none';
      // change button text
      //clockButton.innerHTML = 'Show clock';
    }
    else {
      // clock is hidden. show it
      myBtn.style.display = 'block';
      // change button text
      //clockButton.innerHTML = 'Hide clock';
    }
  }
    function toggleSubmit(){
 var submitBtn = document.getElementById('submitBtn');

    // get the current value of the clock's display property
    var displaySettingSubmit = submitBtn.style.display;

    // also get the clock button, so we can change what it says
    //var clockButton = document.getElementById('clockButton');

    // now toggle the clock and the button text, depending on current state
    if (displaySettingSubmit == 'block') {
      // clock is visible. hide it
      submitBtn.style.display = 'none';
      // change button text
      //clockButton.innerHTML = 'Show clock';
    }
    else {
      // clock is hidden. show it
      submitBtn.style.display = 'block';
      // change button text
      //clockButton.innerHTML = 'Hide clock';
    }
  }
  //document.getElementById("myBtn").disabled = true;
var value=2;
var set = 2;
var prob=0;
var rand =0;
var flagforreset=false;
var flagforsubmit=false;
// 1. Create the button
var button = document.createElement("button");
// var button-2 = document.createElement("button2");
button.innerHTML = "Click to toss the coin";

// 2. Append somewhere
var body = document.getElementsByTagName("body")[0];
body.appendChild(button);
//body2.appendChild(button2);
// var body2 = document.getElementsByTagName("body2")[0];
// body2.appendChild(button2);

// 3. Add event handler
button.addEventListener ("click", mathprob);
// button2.addEventListener("click",reset);
  //0. Random function

  function mathprob(){
    if(flagforsubmit==true){
          flagforsubmit=false;
          toggleSubmit();
        }
    //toggleSubmit();
rand=Math.random();
      //if (Math.random()<=0.5){
        if(rand<=0.5){
value=2*value;
rand=roundTo(rand,4);
        document.getElementById("demo").innerHTML = "Heads: Your money just got doubled!Your total money now is"+" Rupees "+value;
document.getElementById('myBtn').style.display='none';
      }
      else{
rand=roundTo(rand,4);
        document.getElementById("demo").innerHTML = "Tails: Game over!You win Rupees "+value;
        //window.location.href="vishrefreshexp.php";
document.getElementById('myBtn').style.display='block';
button.style.display='none';
        if(flagforsubmit==false){
          flagforsubmit=true;
          toggleSubmit();
        }
        //var timer = setTimeout(function(){window.location="vishrefreshexp.php?win="+value}, 400);
//window.alert("math");
 myWindow = window.open("vishrefreshexp.php?win="+value  + "&random=" + rand);
        //myWindow.close();
setTimeout(function(){
  myWindow.close();
 },1000);       
 ;
        value=set;
      }
  }

   function saysomething(){
      document.getElementById("demo").innerHTML = "";
      //value=2;
document.getElementById('myBtn').style.display='none';
//toggle();
if(flagforsubmit==true){
          flagforsubmit=false;
          toggleSubmit();
        }
//window.alert("say");
//myWindow = window.open("vishrefreshexp.php?win="+value  + "&random=" + rand);
        //myWindow.close();
//setTimeout(function(){
 // myWindow.close();
 //},100);       
// ;
        value=2;
button.style.display='block';
      
  }

function goNext(){
  window.location.assign("vishAmountExp.php");
}


</script>

</div><div>
<b><p id="demo"></p></b>

<form>
  <button-2 type="button-2" id="myBtn" onclick="saysomething()">Reset</button-2>
  <br><br><br>
  <button-3 type="button-3" id="submitBtn" onclick="goNext()">Play for real</button-3>
  <!-- <button onclick="toggle()">Ns</button> --> 
</form>

<br><br><br><br>
<!-- <p>If you are ready to play this game for real click the next button.</p> -->


<!-- <form method="POST" action='vishAmountExp.php'>

                                <br>
                                  <input type="submit" value="Play for real " name="commit" >               

                </form> -->

</div>
</center>
</body>
</html>

