<?php

spl_autoload_register('load');

function load($className): void
{
    $file = sprintf('%s.php', $className);

    if (file_exists($file)) {
        require $file;
    }
}

$user = new User(1, 'User Username', 'Login');
echo $user;

$name = new Name('Piter', 'Parker');
$person = new Person($name, new DateTimeImmutable());

echo $person;