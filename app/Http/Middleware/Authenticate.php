<?php

namespace App\Http\Middleware;

use Session;// import!! para poder manipular sessões

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {

            Session::flash('disconnected', 'Favor logue-se para continuar!');

            return route('login');
        }
    }
}
