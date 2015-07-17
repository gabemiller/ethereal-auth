<?php
/**
 * Created by PhpStorm.
 * User: Gábor
 * Date: 2015.06.30.
 * Time: 15:32
 */

namespace Ethereal\Auth\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class AuthMiddleware
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role = 'users')
    {
        // Check the user is logged in
        if ($this->auth->guest()) {
            return redirect()->guest('auth/login');
        }

        // Check the user has the role or not
        if (!$this->auth->user()->hasRole($role)) {
            abort(403);
        }

        return $next($request);
    }
}