<?php

namespace App\Model;

class Post
{
    public function __construct(
        private int $id,
        private User $user,
        private string $content,
    ) {
    }

    public function __toString(): string
    {
        return sprintf('%s пишет: %s', $this->user, $this->content) . PHP_EOL;
    }
}