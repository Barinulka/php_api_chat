<?php

class User
{
    /**
     * @param int $id
     * @param string $username
     * @param string $login
     */
    public function __construct(
        private int $id,
        private string $username,
        private string $login
    ){
    }

    public function __toString(): string
    {
        return sprintf("Пользователь %d с именем %s и логином %s", $this->id, $this->username, $this->login) . PHP_EOL;
    }
}