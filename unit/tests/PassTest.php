<?php
    declare(strict_types=1);
    
    use PHPUnit\Framework\TestCase;
    //session_start();
    //include 'addteacherFormValidation.php';
    final class PassTest extends TestCase
    {
       public function testCanBeCreatedFromValidEmailAddress(): void
       {
            $q = mysqli_query(mysqli_connect('localhost','root','','ttms'),"SELECT * FROM teachers");
            $row = mysqli_fetch_assoc($q);
            $eid = $row['emailid'];
            $pswd = $row['password'];
            $this->assertEquals("123456",$pswd);
       }
    }
?>