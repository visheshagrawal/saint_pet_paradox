<?php 
if(isset($_POST['commit'])) {
    if(is_numeric($_POST['aptitude'])){
    if($_POST['aptitude']=="140000"){
header("Location:vishDecbyDes.php");
        exit();
    }
    else{
        header("Location:apttestfailed.php");
        exit();
    }}

}

?>
