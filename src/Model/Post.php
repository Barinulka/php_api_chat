<?php

namespace App\Model;

class Post
{
    public function __construct(
        private int $id,
        private Person $author,
        private string $content,
    ) {
    }

    public function __toString(): string
    {
        return sprintf('%s пишет: %s', $this->author, $this->content) . PHP_EOL;
    }
}