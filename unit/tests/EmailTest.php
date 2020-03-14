<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        include('Email.php');
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('kartik@gmail.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    /**
     * @covers Email::fromString
     */
    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'kartik@gmail.com',
            Email::fromString('kartik@gmail.com')
        );
    }
    
    /**
     * @covers Email::ensureIsValidEmail
     */
    public function validEmail(): void
    {
        $this->assertEquals(
            'valid',
            Email::ensureIsValidEmail('kartik@gmail.com')
        );
    }
}