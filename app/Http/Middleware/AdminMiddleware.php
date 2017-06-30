<?php

namespace App\Http\Middleware;

use Closure;

<<<<<<< HEAD
=======

>>>>>>> 214a745345c32dca4a96cab392bc8f13f4126f31
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
<<<<<<< HEAD
//        if(!$request->session()->has('adminusers')){
//            return redirect('admin/login');
//        }
=======

        if(!$request->session()->has('admin')){
            return redirect('admin/login');
        }

//        if(!$request->session()->has('adminusers')){
//            return redirect('admin/login');
//        }

>>>>>>> 214a745345c32dca4a96cab392bc8f13f4126f31
        return $next($request);
    }
}
