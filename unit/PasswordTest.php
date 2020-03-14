<?php
use PHPUnit\Framework\TestCase;

final class PasswordTest extends TestCase
{
    public function testCanBeCreatedFromValidPasswordAddress(): void
    {
        include('Password.php');
        $this->assertInstanceOf(
            Password::class,
            Password::fromString('kartik123')
        );
    }

    public function testCannotBeCreatedFromInvalidPassword(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Password::fromString('invalid');
    }

    /**
     * @covers Password::fromString
     */
    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'kartik123',
            Password::fromString('kartik123')
        );
    }
    
}
?>