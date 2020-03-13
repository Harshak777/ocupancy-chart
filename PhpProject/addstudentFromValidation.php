<?php
/**
 * Created by PhpStorm.
 * User: MSaqib
 * Date: 23-09-2016
 * Time: 22:04
 */
include 'connection.php';
if (isset($_POST['sname']) && isset($_POST['snumber']) && isset($_POST['sroll']) && isset($_POST['semail']) && isset($_POST['spassword']) && isset($_POST['saddr']) && isset($_POST['sdob']) && isset($_POST['sbranch']) && isset($_POST['ssem'])) {
    $sname = $_POST['sname'];
    $snumber = $_POST['snumber'];
    $sroll = $_POST['sroll'];
    $semail = $_POST['semail'];
    $spassword = $_POST['spassword'];
    $saddr = $_POST['saddr'];
    $sdob = $_POST['sdob'];
    $sbranch = $_POST['sbranch'];
    $ssem = $_POST['ssem'];

    //  $message = "nTry again.";
    // echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "INSERT INTO student_info ( sname,snumber,sroll,semail,spassword,saddr,sdob,sbranch,ssem) VALUES ('$sname','$snumber','$sroll','$semail','$spassword','$saddr','$sdob','$sbranch','$ssem')");


if ($q) {
    $message = "Student added.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addstudents.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    // header("Location:index.php");

}

?>