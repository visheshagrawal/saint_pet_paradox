<?php
//session_start();
//error_reporting(0);
//Display the id
?>
<!DOCTYPE html>
<html><head>
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
</style><title>DDMLAB</title>
<body bgcolor="skyblue">
    <div>
	<h1>Demographic Information</h1>
	<p>Please tell us a little about yourself. All fields are required. All answers are confidential.</p>
<form action='vishAptquestDes.php' method="POST"><!-- change database name -->
    <?php
$_SESSION['name']='GUEST';
    ?>
<label for="age">What is your age?</label>
	<input type="number" min="18" max="100" autocomplete="off"
                                        name="age" id="age" required size="5">
<small class="error"></small><br><br>



                                <label for="gender">What is your gender?</label>
                                <select name="gender" required>
                                        <option value="">-- Please select one --</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="O">Other</option>
                                </select>
                                <small class="error"></small>
                        <br><br>

                                <label for="education">What is the highest level of education you've completed?</label>
                                <select name="education" required>
                                        <option value="">-- Please select one --</option>
                                        <option value="High School or lower">High School or lower</option>
                                        <option value="Some college">Some college</option>
                                        <option value="College degree">College degree</option>
                                        <option value="Masters degree">Masters degree</option>
                                        <option value="Doctorate degree">Doctorate degree</option>
                                </select>
                                <small class="error"></small>
                            <br><br>
                                <label for="major">What is your current or past major in school?</label>
                                <input type="text" name="major" id="major" required size="40">
                                <small class="error"></small>
                        <br><br>
                        
                        
                                <label for="occup">What is your current occupation?</label>
                                <input type="text" name="occup" id="occup" size="40" required>
                                <small class="error"></small>
                        <br><br>
						
                                <label for="mstatus">What is your marital status?</label>
                                <select name="mstatus" required>
                                        <option value="">-- Please select one --</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>                                        
                                        <option value="Divorced">Divorced</option>
                                </select>
                                <small class="error"></small>
                        <br><br>
                        
                                <label for="aincome">What is your annual income?</label>
                                <select name="aincome" required>
                                        <option value="">-- Please select one --</option>
                                        <option value="Less than USD 5,000">Less than USD 5,000</option>
                                        <option value="USD 5,000-10,000">USD 5,000-10,000</option>                                        
                                        <option value="USD 10,000-50,000">USD 10,000-50,000</option>
                                        <option value="USD 50,000-75,000">USD 50,000-75,000</option>
                                        <option value="USD 75,000-100,000">USD 75,000-100,000</option>
                                        <option value="USD 100,000-150,000">USD 100,000-150,000</option>
                                        <option value="More than USD 150,000">More than USD 150,000</option>
                                </select>
                                <small class="error"></small>
                        <br><br>                        
                       
    
                                <label for="email">Please enter a valid Prolific ID (strictly asked for payment purposes)</label>
                                <input type="text" name="email" id="email" required size="40">
                                <small class="error"></small>
                        <br><br>
                      

 
                                <br>
                                <input type="submit" value="Next " name="commit">
                        <br><br>

</form>
</div>
<?php
//echo $_SESSION['uid'];?>
</body>
</html>