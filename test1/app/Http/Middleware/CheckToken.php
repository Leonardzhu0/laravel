<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
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
        // 创建中间件
        if ($request->input('token')!='laravelacademy.org'){
            return redirect()->to('http://laravelacademy.org');
        }
        return $next($request);
    }
}
