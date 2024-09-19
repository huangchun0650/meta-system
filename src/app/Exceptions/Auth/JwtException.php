<?php

namespace HuangChun\MetaSystem\App\Exceptions\Auth;

/**
 * JWT TOKEN
 */
class JwtException extends AuthorizationException
{
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = NULL)
    {
        parent::__construct($message, $code, $previous);
    }
}
