<?php

namespace App\Model;

class User
{
    /**
     * @param int $id
     * @param Name $username
     * @param string $login
     */
    public function __construct(
        private int $id,
        private Name $username,
        private string $login
    ){
    }

    public function __toString(): string
    {
        return sprintf("Пользователь %d с именем %s и логином %s", $this->id, $this->username, $this->login) . PHP_EOL;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUsername(): Name
    {
        return $this->username;
    }

    public function setUsername(Name $username): void
    {
        $this->username = $username;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): void
    {
        $this->login = $login;
    }
}