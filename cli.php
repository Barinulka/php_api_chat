<?php

use App\Exception\BaseException;
use App\Model\Name;
use App\Model\Person;
use App\Model\Post;
use App\Model\User;
use App\Repository\UserRepository\InMemoryUserRepository;

include __DIR__ . '/vendor/autoload.php';
include_once __DIR__ . '/functions.php';

$faker = Faker\Factory::create();

$userRepository = new InMemoryUserRepository();

$name = new Name(
    $faker->firstName,
    $faker->lastName,
);

$user = new User(
    1,
    $name,
    $faker->userName,
);

try {
    $userRepository->save($user);

    echo $userRepository->get(1);
} catch (BaseException $e) {
    echo sprintf('code:%d, message:%s', $e->getHttpStatusCode(), $e->getMessage());
} catch (\Exception $e) {
    echo "code:500, message:{$e->getMessage()}";
}