<?php

include 'connection.php';
if (isset($_POST['SN']) && isset($_POST['SS']) ) {
    $sname = $_POST['SN'];
    $spop = $_POST['SS'];
    $classroom_no = $_POST['CR'];

} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$qs="INSERT INTO sections (sec_name ,sec_strength,class_name ) VALUES ('$sname','$spop','$classroom_no')";
$q = mysqli_query($conn, $qs);
$qqs = "UPDATE classrooms SET sec_name= '$sname' WHERE classrooms.croom_no='$classroom_no'";
$qq = mysqli_query($conn, $qqs);

$sql = "CREATE TABLE " . $sname . " (
dayid VARCHAR(10) PRIMARY KEY,
day VARCHAR(10), 
period1 VARCHAR(30),
period2 VARCHAR(30),
period3 VARCHAR(30),
period4 VARCHAR(30),
period5 VARCHAR(30),
period6 VARCHAR(30)
)";
mysqli_query($conn, $sql);
$days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday');
for ($i = 0; $i < 5; $i++) {
    $day = $days[$i];
    $sql = "INSERT into " . $sname . " VALUES('$i','$day','','','','','','')";
    mysqli_query($conn, $sql);
}
if ($qq) {
    $message = "ClassRoom  added.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addsection.php");
} else {
    $message = "Section Details Incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
if ($q) {
    $message = "Scction added.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addsection.php");
} else {
    $message = "Section Details Incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";

}

?>