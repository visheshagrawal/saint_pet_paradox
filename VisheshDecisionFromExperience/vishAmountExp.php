<!DOCTYPE=html>
<html><head><title>DDMLAB</title>
<style>
div {
  width: 750px;
  height: 650px;
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
                        Q. How much money can you pay to play in this game?(Please enter just the amount)
                        <br><br>

                <form method="POST" action='vishRealGameExp.php'>
                                <label for="Amount">Amount(Rupees)</label>
                                <input type="number" required name=Amount value="<?php echo $amountValue; ?>" size="5">
                                <br><br><br>
                                <input type="submit" value="Next &gt;" name="commit">
                </form>
            </div>
