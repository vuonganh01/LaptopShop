<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra xem người dùng khách hàng đã đăng nhập hay chưa
        if (auth()->guard('customer')->check()) {
            return $next($request);
        }

        // Nếu chưa đăng nhập, bạn có thể chuyển hướng đến trang đăng nhập
        return redirect()->route('customer.login');
    }
}
