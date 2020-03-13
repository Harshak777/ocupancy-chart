<?php

include 'connection.php';
if (isset($_POST['SN']) && isset($_POST['SS']) ) {
    $sname = $_POST['SN'];
    $spop = $_POST['SS'];
    $classroom_no = $_POST['CR'];

    // $designation = $_POST['TD'];
    // $alias = $_POST['AL'];
    // $contact = $_POST['TP'];
    // $email = $_POST['TE'];
    // $password = $_POST['TPP'];
    // $address = $_POST['TA'];
    //  $message = "nTry again.";
    // echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "INSERT INTO sections (sec_name ,sec_strength,class_name ) VALUES ('$sname','$spop','$classroom_no')");
$qq = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "UPDATE classrooms SET sec_name= '$sname' WHERE classrooms.croom_no='$classroom_no'");

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
mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $sql);
$days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday');
for ($i = 0; $i < 5; $i++) {
    $day = $days[$i];
    $sql = "INSERT into " . $sname . " VALUES('$i','$day','','','','','','')";
    mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $sql);
}
if ($qq) {
    $message = "ClassRoom  added.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addsection.php");
} else {
    $message = "Section Details Incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    // header("Location:index.php");

}
if ($q) {
    $message = "Scction added.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addsection.php");
} else {
    $message = "Section Details Incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    // header("Location:index.php");

}

?>