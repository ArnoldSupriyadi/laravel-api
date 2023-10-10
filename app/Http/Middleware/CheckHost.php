<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckHost
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!in_array($request->getHost(),['localhost','127.0.0.1','172.168.1.2'])){
                return response()->json([
                    'status'=>false,
                    'message'=>'tidak boleh akses'
                ]);
        }
        return $next($request);
    }
}
