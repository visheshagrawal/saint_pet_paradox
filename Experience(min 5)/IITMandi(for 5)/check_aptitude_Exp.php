

<?php 
if(isset($_POST['commit'])) {
    if(is_numeric($_POST['aptitude'])){
    if($_POST['aptitude']=="140000"){
header("Location:vishinstructionsexp.php");
        exit();
    }
    else{
        header("Location:apttestfailed.php");
        exit();
    }}

}

?>
