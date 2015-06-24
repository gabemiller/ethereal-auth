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

class EAuthController extends Controller
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
     * Get the default registration page.
     *
     * @return mixed
     */
    public function getRegister()
    {
        return view('ethereal-auth::site.register');
    }
}