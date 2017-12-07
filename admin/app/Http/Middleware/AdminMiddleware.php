<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        // dd(empty($id));die;
        $id = session('id');
        // 判断是否登录
        if (empty($id)) {
            return redirect('/admin/login')->with('msg','登录失败!!!');
        }
        return $next($request);
    }
}
