<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null) {
        if (Auth::guard($guard)->check()) {
          $role = Auth::user()->role; 
      
          switch ($role) {
            case 'ingénieur':
               return redirect('/ingenieur');
               break;
            case 'technicien':
               return redirect('/technicien');
               break; 
               case 'directeur':
                return redirect('/directeur');
                break; 
                case 'enseignant':
                    return redirect('/declaration');
                    break; 
            
            default:
               return redirect('/home'); 
               break;
          }
        }
        return $next($request);
      }
}
