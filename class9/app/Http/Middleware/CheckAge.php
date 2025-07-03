<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->age < 18){
            echo "Your age must be greater than 18 or equal to 18";
            // exit;
            // abort('403', 'Your age must be greater than 18 or equal to 18');
            // abort('401' , 'Your are not authorized');
        }
        echo "Age Middleware";

        return $next($request);
    }
}
