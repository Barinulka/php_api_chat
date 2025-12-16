<?php

namespace App\Exception\User;

use App\Exception\BaseException;
use Throwable;

class UserNotFoundException extends BaseException
{
    public function __construct(
        string $message = "Пользователь не найден",
        int $httpStatusCode = 404,
        array $context = [],
        int $code = 0,
        ?Throwable $previous = null
    )
    {
        parent::__construct($message, $httpStatusCode, $context, $code, $previous);
    }
}