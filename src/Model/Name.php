<?php

namespace App\Model;

class Name
{
    public function __construct(
        private string $firstName,
        private string $lastName,
    ) {
    }

    public function __toString(): string
    {
        return sprintf('%s %s', $this->firstName, $this->lastName);
    }
}