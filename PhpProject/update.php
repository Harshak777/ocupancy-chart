<?php
session_start();

include('connection.php');
if (isset($_POST['sname']) && isset($_POST['semail']) && isset($_POST['snumber']) && isset($_POST['saddr']) && isset($_POST['ssem']) ) {
    $sname = $_POST['sname'];
    $snumber = $_POST['snumber'];
    $semail = $_POST['semail'];
    $saddr = $_POST['saddr'];
    $ssem = $_POST['ssem'];
    $spassword = $_POST['spassword']

    header("Location:student_edit.php");
    
    //  $message = "nTry again.";
    // echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$sid=$_SESSION['sid'];

$q = mysqli_query($conn, "UPDATE student_info set sname='$sname' where tid='$sid'");
$q = mysqli_query($conn, "UPDATE student_info set semail='$email' where tid='$sid'");
$q = mysqli_query($conn, "UPDATE student_info set snumber='$snumber' where tid='$sid'");
$q = mysqli_query($conn, "UPDATE student_info set saddr='$saddr' where tid='$sid'");
$q = mysqli_query($conn, "UPDATE student_info set ssem='$ssem' where tid='$sid'");
$q = mysqli_query($conn, "UPDATE student_info set spassword='$spassword' where tid='$sid'");






?>