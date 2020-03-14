<?php
    declare(strict_types=1);
    namespace UnitTestFiles\Test;
    use PHPUnit\Framework\TestCase;
    //session_start();
    //sinclude 'addteacherFormValidation.php';
    final class PassTest1n extends TestCase
    {
       public function testCanBeCreatedFromValidEmailAddress()
       {
            $q = mysqli_query(mysqli_connect('localhos','root','','ttms'),"SELECT * FROM teachers");
            $row = mysqli_fetch_assoc($q);
            $eid = $row['emailid'];
            $pswd = $row['password'];
            $this->assertEquals("123456",$pswd);
       }
    }
?>