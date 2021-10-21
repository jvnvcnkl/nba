<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ForbiddenComment
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

        $forbiddenWords = [
            'hate',
            'idiot',
            'stupid'
        ];

        foreach ($forbiddenWords as $forbiddenWord) {
            if (strstr($request['content'], $forbiddenWord)) {
                return response()->view('forbidden-comment');
            }
        }


        return $next($request);
    }
}
