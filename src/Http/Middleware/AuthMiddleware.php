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
    public function handle($request, Closure $next, $role = null, $permission = null)
    {
        // Check the user is logged in
        if ($this->auth->guest()) {
            return back(403)->withError(trans('ethereal-auth::middleware.403'));
        }

        // If empty role and empty permission, authenticated user get access
        if (empty($role) && empty($permission)) {
            return $next($request);
        }

        // Get the authenticated user
        $user = $this->auth->user();

        // Check the user has the role with the right permission
        if (!empty($role) && !empty($permission)) {
            if ($user->is($role) && $user->can($permission, $role)) {
                return $next($request);
            }
        }

        // Check the user has the right role
        if (empty($role) && !empty($permission)) {
            if ($user->is($role)) {
                return $next($request);
            }
        }

        // Check the user has the right permission
        if (!empty($role) && empty($permission)) {
            if ($user->can($permission)) {
                return $next($request);
            }
        }

        return back(403)->withError(trans('ethereal-auth::middleware.403'));
    }
}