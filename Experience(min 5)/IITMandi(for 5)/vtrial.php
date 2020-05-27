<!-- base64_encode(serialize($array_var)) -->
<!DOCTYPE html><html><head><style>
    div {
        width: 750px;
        height: 500px;
        /*float: left;*/
        background-color: white;
        margin-right: auto;
        margin-left: auto;
        padding-left: 30px;
        padding-right: 30px;
        padding-top: 30px;
        text-align: left;
        /*padding-bottom: 30px;*/
      }
      .error{
        color: red;
      }
        button{
          /* margin-top: 50px; */
          border-radius: 25px;
          /* margin-left:400px; */
          /*width: 250px;*/
          width:150px;
          /* float:left; */
          height: 50px;
        line-height: 60px;
        font-weight: bold;
        /*padding: 0 40px;*/
        /*padding left:30px;*/
        background: tomato;
        border: none;
        display:inline-block;
        }
      
</style></head>
<body bgcolor="skyblue">
    <div>
      <center><h1 style="color:midnightblue;">SAMPLING-PHASE</H1></center>
       <left> In the sampling phase, you can toss the coin below (the red button) as many times as you desire to find out the earnings from the game. Getting a head will increase your earnings and getting a tale will end the game. In the sampling phase, each outcome you get in the coin toss will not affect your final earnings from the game. In each game, you start with an initial amount of INR 2. Once your game is over, you may play the game again upon clicking the green reset button. Once you are satisfied with your game play, you may play for real by clicking the “Play for real” button (you need to toss the coin at least once before you can play the game for real). Once you click the “Play for real” button, you will be taken to the final-choice phase where you will be asked to play this game for real. 
<br><br>
        <button id="toss" onclick="toss()">Toss</button>
    </left>
    <object align="right">
    <button style="background-color:limegreen;" id="reset" onclick="reset()">Reset</button>
    </object>
    <center>
    <button style="background-color:grey;" id="submit" onclick="submit()">Play for real</button>
    </center>
    <p id="demo" style="font-weight: bold; align-content:center;"></p>
</div>
    <script>

        document.getElementById("reset").style.display="none";
        document.getElementById("submit").style.display="none";
        count=0;
        var win_arr=[];
        var rand_arr=[];
        value=2;

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

        function mathprob(){
            rand=Math.random();
            if(rand<=0.5){
                value=2*value;
                rand=roundTo(rand,4);
                document.getElementById("demo").innerHTML = "Heads: Your money just got doubled!Your total money now is"+" Rupees "+value;
                //document.getElementById('myBtn').style.display='none';
                }
            else{
                rand=roundTo(rand,4);
                count+=1;
                //Store value in array
                win_arr.push(value);
                rand_arr.push(rand);
                //window.location.href="vishrefreshexp.php";
                document.getElementById('reset').style.display='block';
                document.getElementById('toss').style.display='none';
                if(count>=5){
                    //Show submit button
                    document.getElementById('submit').style.display='block';
                }
                else{
                    //Hide submit
                    document.getElementById('submit').style.display='none';
                }
                document.getElementById("demo").innerHTML ="Tails: Game over!You win Rupees "+value;
                //var timer = setTimeout(function(){window.location="vishrefreshexp.php?win="+value}, 400);
                //myWindow = window.open("vishrefreshexp.php?win="+value  + "&random=" + rand);
                //myWindow.close();
                value=set;
                }
        }

        function toss(){
            // document.getElementById("demo").innerHTML="hello";
            mathprob();
        }

        function reset(){
            document.getElementById("demo").innerHTML = "";
            document.getElementById("reset").style.display="none";
            document.getElementById("submit").style.display="none";
            document.getElementById("toss").style.display="block";
            value=2;
        }

        function submit(){
            //document.getElementById("demo").innerHTML =win_arr;
            var str_var = JSON.stringify(win_arr);
            var random_var = JSON.stringify(rand_arr);
            myWindow = window.open("voutput.php?str_var="+str_var+ "&random_var=" + random_var);
        }
    </script>
</body>
</html>