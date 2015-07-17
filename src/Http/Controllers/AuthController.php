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
use Illuminate\Support\Facades\Validator;

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
        // Validate the inputs
        $validator = Validator::make($request->all(),
            config('ethereal-auth.loginValidation'));

        // Check if the validation fails or not
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        // Get datas from inputs
        $email = $request->get('email');
        $password = $request->get('password');
        $remember_me = $request->has('remember_me');

        // Log in the user with the inputs
        if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1], $remember_me)) {

            // Check the user is admin or not
            if (Auth::user()->isAdmin()) {
                return redirect()->intended('dashboard');
            } else {
                return redirect()->intended('home');
            }
        }

        // Unsuccessful log in
        return back()->withErrors('Hiba történt')->withInput();
    }


    /**
     * Let the user log out.
     *
     * @param Request $request
     */
    public function postLogout()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Log out the user
        Auth::logout();

        // Take back the user where he/she came from
        if ($user->isAdmin()) {
            return redirect()->intended('admin.login');
        } else {
            return redirect()->intended('home');
        }
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
    public function postSignup(Request $request)
    {

        // Validate the inputs
        $validator = Validator::make($request->all(),
            config('ethereal-auth.signupValidation'));

        // Check if validation fails or not
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create new user object
        $user = new User;

        // Fill the user object with posted data
        $user->fill([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))
        ]);

        // Save the user in the DB
        if ($user->save()) {
            return "Sikeres regisztráció";
        } else {
            return "Sikertelen regisztráció";
        }

    }
}