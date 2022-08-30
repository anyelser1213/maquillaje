<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {


            $out = new \Symfony\Component\Console\Output\ConsoleOutput();
            $out->writeln("Entramos en redirecTo AUTHENTICATE.PHP");


            return route('login');
        }
    }
}
