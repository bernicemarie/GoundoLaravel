<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)

    {
         if(Auth::check() && Auth::user()->status === 0){
             $notification=['message'=>'Accès non autorisé, merci de contacter l\'administrateur',
                        'alert-type'=>'error'
                         ];

            return Redirect()->route('home')->with($notification);
        }
        return $next($request);
    }
}
