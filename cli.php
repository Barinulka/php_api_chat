<?php

use App\Model\Name;
use App\Model\Person;
use App\Model\User;

spl_autoload_register('load');

function load($className): void
{

    $file = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    if (file_exists($file)) {
        require $file;
    }
}

$user = new User(1, 'User Username', 'Login');
echo $user;

$name = new Name('Piter', 'Parker');
$person = new Person($name, new DateTimeImmutable());

echo $person;