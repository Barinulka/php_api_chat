<?php

use App\Model\Comment;
use App\Model\Name;
use App\Model\Post;
use App\Model\User;

include __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/functions.php";

$faker = Faker\Factory::create('ru_RU');

$name = new Name(
    $faker->firstName(),
    $faker->lastName(),
);

$user = new User(
    $faker->randomDigit(),
    $name,
    $faker->userName()
);

$console = $argv[1] ?? null;

switch($console) {
    case 'user':
        echo $user;
        break;
    case 'post':
        $post = new Post(
            $faker->randomDigit(),
            $user,
            $faker->paragraph(),
        );

        echo $post;
        break;
    case 'comment':
        $post = new Post(
            $faker->randomDigit(),
            $user,
            $faker->paragraph(),
        );

        $comment = new Comment(
            $faker->randomDigit(),
            $user,
            $post,
            $faker->sentence(),
        );

        echo $comment;
        break;
    default:
        echo 'Ошибка. Попробуйте команду user, post или comment' . PHP_EOL;
}


