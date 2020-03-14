<?php
    declare(strict_types=1);
    namespace UnitTestFiles\Test;
    use PHPUnit\Framework\TestCase;
    //session_start();
    //include 'adminFormValidation.php';
    final class AdminLoginPassTestn extends TestCase
    {
       public function testCanBeCreatedFromValidEmailAddress()
       {
            $q = mysqli_query(mysqli_connect('localhost','root','','ttms'),"SELECT * FROM admin");
            $row = mysqli_fetch_assoc($q);
            $eid = $row['name'];
            $pswd = $row['password'];
            $this->assertEquals("pass12",$pswd);
       }
    }
?>