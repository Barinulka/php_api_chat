<?php

namespace App\Exception;

use Throwable;

class BaseException extends \Exception
{
    protected int $httpStatusCode;
    protected array $context = [];

    public function __construct(
        string $message = "",
        int $httpStatusCode = 500,
        array $context = [],
        int $code = 0,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function getContext(): array
    {
        return $this->context;
    }

    public function getHttpStatusCode(): int
    {
        return $this->httpStatusCode;
    }
}