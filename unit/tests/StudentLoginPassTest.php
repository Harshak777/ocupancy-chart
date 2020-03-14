<?php
    declare(strict_types=1);
    namespace UnitTestFiles\Test;
    use PHPUnit\Framework\TestCase;
    //session_start();
    //include 'adminFormValidation.php';
    final class StudentLoginPassTest extends TestCase
    {
       public function testCanBeCreatedFromValidEmailAddress()
       {
        $q = mysqli_query(mysqli_connect('localhost','root','','ttms'),"SELECT * FROM student_info");
        $row = mysqli_fetch_assoc($q);
        $eid = $row['sroll'];
        $pswd = $row['spassword'];
        $this->assertEquals("vijayjonathan",$pswd);
       }
    }
?>