<?php

session_start();    
include 'connection.php';
if (isset($_POST['sroll']) && isset($_POST['spassword'])) {
    $id = $_POST['sroll'];
    $password = $_POST['spassword'];
} else {
    die();
}
$q1 = "SELECT * FROM student_info WHERE sroll = '$id' and spassword = '$password' ";
$q = mysqli_query($conn, $q1);
if (mysqli_num_rows($q) == 1) {
    $row = mysqli_fetch_array($q);
    $_SESSION['sid'] = $row['sid'];
    
    header("Location:dashbord_student.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

?>