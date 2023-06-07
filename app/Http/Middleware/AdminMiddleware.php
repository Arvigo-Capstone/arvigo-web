<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // $http = new Client();
        // $data = $http->request('GET', 'https://api.arvigo.site/v1/auth/login', [
        //     'headers' => [
        //         'Authorization' => 'Bearer ' . env('HEADER_TOKEN', "somedefaultvalue"),
        //     ],
        // ]);
        // $getData = (string) $data->getBody();
        // $response = json_decode($getData, true);

        if (Auth::user()->role == 'admin') {
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
