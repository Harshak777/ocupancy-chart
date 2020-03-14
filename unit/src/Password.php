<?php
declare(strict_types=1);

final class Password
{
    private $pass;

    private function __construct(string $pass)
    {
        $this->pass = $pass;
    }

    public static function fromString(string $pass): self
    {
        return new self($pass);
    }

    public function __toString(): string
    {
        return $this->pass;
    }
}