<?php

namespace YFDev\System\App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use YFDev\System\App\Notifications\PusherQueueNotification;
use YFDev\System\App\Constants\Pusher;
use YFDev\System\App\Models\Admin;
use Carbon\Carbon;

class CheckTokenExpiry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $user = Auth::user();

        if ($user && $user->token_expiry) {
            $tokenExpiry = Carbon::parse($user->token_expiry);
            $now = Carbon::now();

            if ($tokenExpiry->isFuture() && $tokenExpiry->diffInMinutes($now) <= 5) {
                $system = Admin::find(1);
                $pipe = ($request->is('admin/api/*') ? Pusher::TO_ADMIN_USER_ID : Pusher::TO_CUSTOMER_USER_ID) . $user->id;

                \Notification::send($system, new PusherQueueNotification(
                    $pipe,
                    Pusher::TYPE_TOKEN_REFRESH,
                ));
            }
        }

        return $response;
    }
}
