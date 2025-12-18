<?php

namespace App\Repository\UserRepository;

use App\Exception\User\UserNotFoundException;
use App\Model\User;

class InMemoryUserRepository
{
    private array $users = [];

    /**
     * @param User $user
     * @return void
     */
    public function save(User $user): void
    {
        $this->users[] = $user;
    }

    /**
     * @param int $id
     * @return User
     * @throws UserNotFoundException
     */
    public function get(int $id): User
    {
        foreach ($this->users as $user) {
            if ($user->getId() === $id) {
                return $user;
            }
        }

        throw new UserNotFoundException("Пользователь не найден: #{$id}");
    }
}