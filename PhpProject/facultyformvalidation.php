<?php

session_start();
include 'connection.php';
if (isset($_POST['FN']) && isset($_POST['password'])) {
    $fac = $_POST['FN'];
    $password = $_POST['password'];
} else {
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT name FROM teachers WHERE emailid = '$fac' and password = '$password'");
if (mysqli_num_rows($q) == 1) {
    $row = mysqli_fetch_assoc($q);
    $_SESSION['loggedin_name'] = $row['name'];
    $_SESSION['loggedin_id'] = $fac;
    header("Location:facultypage.php");
} else {
    $message = "Username incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
if (mysqli_num_rows($q) == 1) {
    $row = mysqli_fetch_assoc($q);
    echo 'welcome ' . $row['name'];
} else {
    $message = "Invalid Faculty Number.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
?>



