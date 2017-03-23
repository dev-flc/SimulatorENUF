<?php
namespace SimulatorENUF\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

use Closure;

class Alumno
{
   protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth=$auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      /* Admin */
      if($this->auth->user()->alumnologin())
      {
        return $next($request);
      }
      /* Profesor */
      elseif($this->auth->user()->profesorlogin())
      {
        return redirect()->route('principalprofesor.index');
      }
      /* Alumno */
      elseif($this->auth->user()->adminlogin())
      {
        return redirect()->route('cursos.index');
      }
    }
}
