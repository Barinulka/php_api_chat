<?php

namespace App\Model;

class Comment
{
    public function __construct(
        private int $id,
        private User $user,
        private Post $post,
        private string $comment,
    ) {
    }

    public function __toString(): string
    {
        return sprintf('%s оставил комментарий: %s', $this->user, $this->comment) . PHP_EOL;
    }
}