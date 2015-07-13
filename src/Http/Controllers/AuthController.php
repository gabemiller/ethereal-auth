<?php
/**
 * Created by PhpStorm.
 * User: Gábor
 * Date: 2015.06.23.
 * Time: 18:54
 */

namespace Ethereal\Auth\Controllers;


use Ethereal\User\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

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
        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
            return "Sikeres bejelentkezés";
        }
        return "Sikertelen bejelentkezés";
    }


    /**
     * Let the user log out.
     *
     * @param Request $request
     */
    public function postLogout(Request $request)
    {
        Auth::logout();
        return "Sikeres kijelentkezés";
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

    /**
     * Let the guest sign up to the app.
     *
     * @return boolean
     */
    public function postSignup(){

        $user = new User;

        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));

       return $user->save();
    }
}