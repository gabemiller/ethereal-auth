<?php
/**
 * Created by PhpStorm.
 * User: Gábor
 * Date: 2015.06.30.
 * Time: 15:33
 */

namespace Ethereal\Auth\Middleware;


use Ethereal\User\User;

class RoleMiddleware
{
    /**
     * @var User
     */
    protected $user;

    /**
     * Create a new filter instance.
     *
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {

        if (true) {
            if ($request->ajax()) {
                return response('Nincs jogosultság', 403);
            } else {
                return redirect()->route('loginGet',[],403);
            }
        }

        return $next($request);
    }
}