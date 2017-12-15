<?php

namespace App\Http\Middleware;

use Closure;

class UserloginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = session('id');
        // 判断是否登录
        if (empty($id)) {
            return redirect('/index.php?action=login');
        }
        return $next($request);
    }
}
