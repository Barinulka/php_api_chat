<?php

use App\Model\Name;
use App\Model\Person;
use App\Model\Post;
use App\Model\User;

spl_autoload_register('load');

function load($className): void
{

    $file = "{$className}.php";
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    $file = str_replace('App', 'src', $file);
    if (file_exists($file)) {
        require $file;
    }
}
$name = new Name('Piter', 'Parker');

$user = new User(1, $name, 'Login');

$person = new Person($name, new DateTimeImmutable());
$post = new Post(1, $person, 'Some post content');

echo $post;