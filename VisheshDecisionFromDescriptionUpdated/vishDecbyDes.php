<?php
error_reporting(0); 
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <style>
div {
  width: 1000px;
  height: 600px;
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
    <H1>PROBLEM</H1>
	<p>
A casino offers a game of chance for you in which a fair coin is tossed at each stage. The initial stake starts at 2 Rupees and is doubled every time heads appears. The first time tails appears, the game ends and you win whatever is in the pot. Thus you win 2 dollars if tails appears on the first toss, 4 Rupees if heads appears on the first toss and tails on the second, 8 Rupees if heads appears on the first two tosses and tails on the third, and so on.
<br><br>
How much money can you pay to play in this game?(Enter only the amount in numbers)
</p>
<?php
$email_value="vish123";
$email= $_GET['email'];
echo $email;
?>
<form method="POST" action='vishRealGameDes.php'>
                                <label for="Amount">Amount(Rupees)</label>
                                <input type="number" required size="5" id="Amount" name="Amount">
                                <br>
                                <input type="hidden" name="email" value= <?php echo $email?>>
                                <br><br>
                                <input type="submit" value="Next &gt;" name="commit">
                        
                </form>
            </div>

        </body></html>
