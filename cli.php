<?php

use App\Model\Name;
use App\Model\Person;
use App\Model\User;

spl_autoload_register('load');

function load($className): void
{

    $file = sprintf('%s.php', $className);
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    if (file_exists($file)) {
        require $file;
    }
}
$name = new Name('Piter', 'Parker');

$user = new User(1, $name, 'Login');
echo $user;

$person = new Person($name, new DateTimeImmutable());

echo $person;