<?php

namespace HuangChun\MetaSystem\App\Http\Middleware;

use Closure;
use HuangChun\MetaSystem\App\Constants\ErrorCode;
use HuangChun\MetaSystem\App\Exceptions\Auth\JwtException;
use HuangChun\MetaSystem\App\Exceptions\Auth\SessionExpiredException;

abstract class AuthMiddleware
{
    abstract protected function isAdmin(): bool;

    /**
     * @throws JwtException
     * @throws SessionExpiredException
     */
    public function handle($request, Closure $next)
    {
        $jwt = get_jwt();
        if (blank($jwt)) {
            throw new JwtException('empty jwt token', ErrorCode::JWT_EMPTY);
        }

        if (! \Auth::check()) {
            throw new SessionExpiredException('session expired', ErrorCode::JWT_INVALID);
        }

        return $next($request);
    }
}
