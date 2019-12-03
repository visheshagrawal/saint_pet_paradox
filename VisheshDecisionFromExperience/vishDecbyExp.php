<!DOCTYPE html><html><head>
<title>DDMLAB</title>
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

  }
  
</style>
</head>
<body bgcolor="skyblue">
  <div>
    <H1 font="Stencil">PROBLEM</H1>
    <br>

A casino offers a game in which you have to toss a coin by pressing the button. In case a heads comes you will be still in the game , but if a tails comes your game will be over ,you will be shown your amount and if you want to play again you can press the reset button. You can play the game as many times you want.

<br><br>
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
var value=2;
var set = 2;
var prob=0;
// 1. Create the button
var button = document.createElement("button");
// var button-2 = document.createElement("button2");
// button.innerHTML = "Toss the coin";

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

      if (Math.random()<=0.5){
        value=2*value;
        document.getElementById("demo").innerHTML = "Heads: Your money just got doubled!Your total money now is"+" Rupees "+value;
       }
      else{
        document.getElementById("demo").innerHTML = "Tails: Game over!You win Rupees "+value;
        //value=set;
        //window.location.href="vishrefreshexp.php";
        var timer = setTimeout(function(){window.location="vishrefreshexp.php?win="+value}, 400);
        //value=set;
      }
  }

   function saysomething(){
      document.getElementById("demo").innerHTML = "";
      value=2;
      
  }

function heelo(){
          <?php
    echo "HEllo";
        ?>
}

function test()

{

alert("<?php echo "Testing"; ?>");

}


</script>

</div><div>
<b><p id="demo"></p></b>

<form>
  <button-2 type="button-2" onclick="saysomething()">Reset</button-2> 
</form>

<br><br><br><br>
<p>If you are ready to play this game for real click the next button.</p>


<form method="POST" action='vishAmountExp.php'>

                                <br>
                                  <input type="submit" value="Next " name="commit" >               

                </form>

</div>

</body>
</html>

