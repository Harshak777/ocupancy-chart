<?php

include 'connection.php';
if (isset($_POST['tobealloted']) && isset($_POST['toalloted2']) && isset($_POST['toalloted3'])) {
    $subject = $_POST['tobealloted'];
    $teacher = $_POST['toalloted'];
    $teacher2 = $_POST['toalloted2'];
    $teacher3 = $_POST['toalloted3'];
  
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q4= "UPDATE subjects SET isAlloted=1, allotedto='$teacher' , allotedto2='$teacher2' ,
allotedto3 ='$teacher3' WHERE subject_code='$subject'";
$q = mysqli_query($conn, $q4);

if ($q) {
    $message = "Done.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:allotpracticals.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    $message = $subject;
    echo "<script type='text/javascript'>alert('$message');</script>";

}

?>