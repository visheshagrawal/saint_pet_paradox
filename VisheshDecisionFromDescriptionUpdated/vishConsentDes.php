<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<style>
div {
  width: 1250px;
  height: 1250px;
  background-color: white;
  margin-right: auto;
  margin-left: auto;
  padding-left: 30px;
  padding-right: 30px;
  padding-top: 30px;
  /*padding-bottom: 30px;*/
}
</style>
	<!-- <link rel="stylesheet" href="w3.css"> -->
</head> 
<body bgcolor="skyblue">
<!-- <div class="w3-container w3-white w3-display-middle"> -->
	<div>
<h1 font="Stencil">Consent Form</h1>
	This game is part of a research study conducted at Indian Institute of Technology Mandi.<br>The purpose of the research is to study the decision-making process.
		<h2>Procedures</h2>
		You will make a series of decisions with the objective of getting the maximum possible points.
		<h2>Participant Requirements</h2>
Participation in this study is limited to individuals aged 18 and older.
<h2>Risks</h2>
The risks and discomfort associated with participation in this study are no greater than those ordinarily encountered in daily life or during other online activities.

<h2>Benefits</h2>
There may be no personal benefit from your participation in the study but the knowledge received may be of value to humanity.

<h2>Compensation & Costs</h2>
You will be compensated for completing the game at the rate initially advertised. You will only be eligible for compensation if you have completed the game in full and supplied the appropriate confirmation code. There is no partial payment if you do not complete the study.

There will be no cost to you if you participate in this study.

<h2>Confidentiality</h2>
The data captured for the research does not include any personally identifiable information about you. Your IP address will not be captured and your email address will not be used for identification.

By participating in this research, you understand and agree that we may be required to disclose your consent form, data and other personally identifiable information as required by law, regulation, subpoena or court order. Otherwise, your confidentiality will be maintained in the following manner:

Your data and consent form will be kept separate. Your consent form will be stored in a locked location on our property and will not be disclosed to third parties. By participating, you understand and agree that the data and information gathered during this study may be used by us and published and/or disclosed by us to others outside of relationship. However, your name, address, contact information and other direct personal identifiers in your consent form will not be mentioned in any such publication or dissemination of the research data and/or results by us.

<h2>Right to Ask Questions & Contact Information</h2>
If you have any questions about this study, you should feel free to ask them by contacting the Principal Investigator now at:
<pre>
Dr. Varun Dutt
ACS Lab, Kamand
Indian Institute of Technology Mandi 
Himachal Pradesh India 175001
+91 (1905) 267041
varun@iitmandi.ac.in
</pre> 

If you have questions later, desire additional information, or wish to withdraw your participation please contact the Principle Investigator by mail, phone or e-mail in accordance with the contact information listed above.

<h2>Voluntary Participation</h2>
Your participation in this research is voluntary. You may discontinue participation at any time during the research activity.

All questions are mandatory.
<br>
<form action="" method="post">
Are you 18 years or older?
<br>
<input type="radio" name="age" value="age_yes">Yes
<input type="radio" name="age" value="age_no">No
<br>
I have read and understand the information given above.
<br>	
<input type="radio" name="info" value="info_yes">Yes
<input type="radio" name="info" value="info_no">No
<br>
I want to participate in this research and continue with the game.
<br>
<input type="radio" name="participate" value="participate_yes" >Yes
<input type="radio" name="participate" value="participate_no">No
<br>
<input type="submit" name="eligibility" value="Next" />
</form>
</div>
<?php
$_SESSION['uid']=uniqid(TRUE,TRUE);
//echo $_SESSION['uid'];
?>

<?php
if (isset($_POST['eligibility'])) {
	if(empty($_POST['age']) || empty($_POST['info']) || empty($_POST['participate'])){
		echo "Please answer all questions";
	}
	else{
	if($_POST['age']=="age_yes" && $_POST['info']=="info_yes" && $_POST['participate']=="participate_yes" ){
		header('Location:vishDemographicsDes.php');
		exit();
	}
	elseif ($_POST['age']=="age_no" || $_POST['info']=="info_no" || $_POST['participate']=="participate_no" ) {
		header('Location:wrongoption.php');
		exit();
	}
	else{
		echo "Please answer all the questions.";
		/*<script>
    function myFunction() {
        var x;
        var r = confirm("Please answer all the questions");
        if (r == true) {
            header("Location:consent.php");
        }
        else {
            x = "You pressed Cancel!";
        }
    }
		</script>
	}*/
	}
// if(isset($_POST['age']))
// {
// echo "You have selected :".$_POST['age'];  //  Displaying Selected Value
// }
// else{
// 	echo "Please answer the first question ";
// }
// }
// else{
// 	echo "thank you 2";
}
}
?>


</body>
</html>