<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UmurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $data = $request->session()->get('age'); //nilai umur

        if($data >= 18) {
            return $next($request);
        }
        // jika umurnya kurang dari 18 tahun
        return redirect()->route('form.umur')->with('failed', 'Umur kamu belum memenuhi');

    }
}
