<?php
// Start the session
session_start();
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
<center><h1 style="color:midnightblue;">FINAL-CHOICE PHASE</H1></center>
                        In this phase, please enter how much money you are willing to pay to play in this game?
                        <br><br>

                <form method="POST" action='vishRealGameExp.php'>
                                <label for="Amount">INR</label>
                                <input type="number" required name=Amount value="<?php echo $amountValue; ?>" size="5">
                                <br><br><br>
                                <input type="submit" value="Next &gt;" name="commit">
                </form>
            </div>
