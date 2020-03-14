<?php

include 'connection.php';
if (isset($_POST['CN']) && isset($_POST['CS']) && isset($_POST['CPP']) && isset($_POST['CP']) && isset($_POST['SC']) && isset($_POST['SK']) ) {
    $roomno = $_POST['CN'];
    $cstrength = $_POST['CS'];
    $cpowerpoint = $_POST['CPP'];
    $projector = $_POST['CP'];
    $smartclass = $_POST['SC'];
    $speaker = $_POST['SK'];

} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$ins = "INSERT INTO classrooms ( croom_no,c_strength,pp_no,projector,smart_class,speaker ) VALUES ('$roomno','$cstrength','$cpowerpoint','$projector','$smartclass','$speaker')";
$q = mysqli_query($conn, $ins);
 $sql = "CREATE TABLE " . $roomno . " (
 dayid VARCHAR(10) PRIMARY KEY, 
 day VARCHAR(10), 
 period1 VARCHAR(30),
 period2 VARCHAR(30),
 period3 VARCHAR(30),
 period4 VARCHAR(30),
 period5 VARCHAR(30),
 period6 VARCHAR(30),
 runtime VARCHAR(30),
 )";
 mysqli_query($conn, $sql);
 
 $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday');
 for ($i = 0; $i < 5; $i++) {
     $day = $days[$i];
     $sql = "INSERT into " . $roomno . " VALUES('$i','$day','','','','','','','')";
     mysqli_query($conn, $sql);
 }
if ($q) {
    $message = "Classroom added.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
    header("Location:addclassrooms.php");
} else {
    $message = "incorrect InFo.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";


}

?>