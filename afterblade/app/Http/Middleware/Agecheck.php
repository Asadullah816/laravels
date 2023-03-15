<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Agecheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->name && $request->name==="Maaz" || $request->name==="maaz" || $request->name==="Faisal" || $request->name==="faisal")
        {
            return redirect("noaccess");
        }
        if($request->name && $request->name==='shahid')
        {
            return redirect('inner');
        }
        return $next($request);
    }
}
