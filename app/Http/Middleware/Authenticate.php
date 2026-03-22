<?php

namespace App\Http\Middleware;

/*use Closure;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\Authenticate as Middleware;*/

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


/*class Authenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *\Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param

    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}*/

class Authenticate
{
    /**
     * Обработка входящего запроса.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Проверяем, авторизован ли пользователь через стандартный фасад Auth
        if (!Auth::check()) {
            // Если нет, отправляем на страницу логина
            return $request->expectsJson()
                ? response()->json(['message' => 'Unauthenticated.'], 401)
                : redirect()->route('user');
        }

        return $next($request);
    }
}
