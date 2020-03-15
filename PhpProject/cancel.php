<?php

include 'connection.php';
if (isset($_POST['select_classroomc']) && isset($_POST['select_dayc']) && isset($_POST['select_periodc'])) {
    $select_classroom = $_POST['select_classroomc'];
    $select_day = $_POST['select_dayc'];
    $select_period = $_POST['select_periodc'];
   
    
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$tid=$_SESSION['tid'];

        $sql = "SELECT * FROM teachers WHERE faculty_number='$tid'";
        $run_query=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($run_query);
        $fn=$row['faculty_number'];

$qq1 =  "SELECT * from subjects WHERE  allotedto = '$fn'";
$qq = mysqli_query($conn,$qq1);
$row=mysqli_fetch_array($qq);
$subc=$row['subject_code'];
$subn=$row['subject_name'];
$sub= $subc."<br>".$subn; 
$q2="SELECT $select_period FROM $select_classroom WHERE  $select_period = '$sub' and day = '$select_day'";
$q1 = mysqli_query($conn, $q2);
$row = mysqli_fetch_array($q1);

 if($row)
 {
    $qz = "UPDATE $select_classroom SET $select_period = '-<br>-' WHERE day = '$select_day'";
     $q = mysqli_query($conn, $qz);
     if ($q) {
        $sql = "SELECT * FROM sections WHERE class_name = '$select_classroom'";
        $run_query=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($run_query);
        $s_name = $row['sec_name']; 
        $qz1 = "INSERT INTO notification (sec_name,croom_no,notify) VALUES('$s_name','$select_classroom','Timetable Updated<br>Class Cancelled<br>Check Your Room TT')";
        $qs1 = mysqli_query($conn, $qz1);
        
         $message = "Cancelled";
         echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location:facultypage.php");
     } else {
         $message = "Not Cancelled";
         echo "<script type='text/javascript'>alert('$message');</script>";

     }
    
 } 
 else
 {
     $message = "You can cancel only your period";
     echo "<script type='text/javascript'>alert('$message');</script>";
 }

?>