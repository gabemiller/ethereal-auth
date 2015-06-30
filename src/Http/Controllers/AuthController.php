<?php
/**
 * Created by PhpStorm.
 * User: Gábor
 * Date: 2015.06.23.
 * Time: 18:54
 */

namespace Ethereal\Auth\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{

    /**
     * Get the default login page.
     *
     * @return mixed
     */
    public function getLogin()
    {
        return view('ethereal-auth::site.login');
    }

    /**
     * Get the default adminlogin page.
     *
     * @return mixed
     */
    public function getAdminLogin()
    {
        return view('ethereal-auth::admin.login');
    }

    /**
     * Let the user log in.
     *
     * @param Request $request
     */
    public function postLogin(Request $request)
    {
        if ($request->auth()) {

        }
    }


    /**
     * Let the user log out.
     *
     * @param Request $request
     */
    public function postLogout(Request $request){

    }

    /**
     * Get the default registration page.
     *
     * @return mixed
     */
    public function getSignup()
    {
        return view('ethereal-auth::site.signup');
    }
}