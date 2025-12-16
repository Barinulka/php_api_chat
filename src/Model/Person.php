<?php

namespace App\Model;

class Person
{
    public function __construct(
        private Name $name,
        private \DateTimeImmutable $registeredAt,
    ) {
    }

    public function __toString(): string
    {
        return sprintf('%s (на сайте с %s)', $this->name, $this->registeredAt->format('d.m.Y')) . PHP_EOL;
    }
}