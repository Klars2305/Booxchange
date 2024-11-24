<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        // Check if the user is authenticated as an admin
        if (Auth::guard('admin')->check()) {
            return $next($request);  // Allow access to the route
            
        }
        

        // If not an admin, redirect to a specific route (e.g., login page)
        return redirect()->route('login');  // Or any other route you want (e.g., login)
    }
    protected $routeMiddleware = [
        // Other route middlewares...
        'admin' => \App\Http\Middleware\AdminMiddleware::class,  // Add this line
    ];
}

