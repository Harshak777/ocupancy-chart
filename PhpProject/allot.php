<?php

include 'connection.php';
if (isset($_POST['select_classroom']) && isset($_POST['select_day']) && isset($_POST['select_period'])) {
    $select_classroom = $_POST['select_classroom'];
    $select_day = $_POST['select_day'];
    $select_period = $_POST['select_period'];
   

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

$qqs = "SELECT * from subjects WHERE  allotedto = '$fn'";
$qq = mysqli_query($conn,$qqs);
$row=mysqli_fetch_array($qq);
$subc=$row['subject_code'];
$subn=$row['subject_name'];
$sub= $subc."<br>".$subn; 
//"UPDATE $select_classroom SET $select_period = 'NEWSUB' WHERE day = $select_day"
//SELECT * FROM $select_classroom WHERE period1 = '-<br>-' and day = '$select_day' and $select_period =  'period1'
$q1s =  "SELECT $select_period FROM $select_classroom WHERE  $select_period = '-<br>-' and day = '$select_day'";
$q1 = mysqli_query($conn,$q1s);
$row = mysqli_fetch_array($q1);
 if($row)
 {
    $upd =  "UPDATE $select_classroom SET $select_period = '$sub' WHERE day = '$select_day'";
     $q = mysqli_query($conn,$upd);
     if ($q) {
        $sql = "SELECT * FROM sections WHERE class_name = '$select_classroom'";
        $run_query=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($run_query);
        $s_name = $row['sec_name'];
        $in = "INSERT INTO notification (sec_name,croom_no,notify) VALUES('$s_name','$select_classroom','Timetable Updated<br>New Period Added<br>Check Your Room TT')";
        $qs1 = mysqli_query($conn, $in);
         
        $message = "Allotted";
         echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location:facultypage.php");
     } else {
         $message = "Not Allotted";
         echo "<script type='text/javascript'>alert('$message');</script>";
    

     }
    
 } else
 {
     $message = "Period already occupied";
     echo "<script type='text/javascript'>alert('$message');</script>";
   
 }

?>