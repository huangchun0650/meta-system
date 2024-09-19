<?php

namespace HuangChun\MetaSystem\App\Http\Middleware;

use Illuminate\http\Request;
use HuangChun\MetaSystem\App\Constants\ErrorCode;
use HuangChun\MetaSystem\App\Exceptions\Auth\AllowUserRoleException;

/**
 * 允許的 User Role
 *
 * Class AllowUserRole
 */
class AllowUserRole
{
    public function handle(Request $request, \Closure $next, ...$allowRoles)
    {
        if (! $request->route()->hasParameter('user')) {
            return $next($request);
        }

        $user = $request->user;

        if (! in_array($user->role, $allowRoles)) {
            throw new AllowUserRoleException("The parameters {$user->id} invalid", ErrorCode::INVALID_REQUEST);
        }

        return $next($request);
    }
}
