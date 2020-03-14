<?php
    declare(strict_types=1);
    namespace UnitTestFiles\Test;
    use PHPUnit\Framework\TestCase;
    //session_start();
    //include 'addteacherFormValidation.php';
    final class EmailTest1 extends TestCase
    {
       public function testCanBeCreatedFromValidEmailAddress()
       {
            $q = mysqli_query(mysqli_connect('localhost','root','','ttms'),"SELECT * FROM teachers");
            $row = mysqli_fetch_assoc($q);
            $eid = $row['emailid'];
            $pswd = $row['password'];
            $this->assertEquals("faisaltalib@gmail.com",$eid);
       }
    }
?>