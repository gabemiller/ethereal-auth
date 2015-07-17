<?php
/**
 * Created by PhpStorm.
 * User: Gábor
 * Date: 2015.06.23.
 * Time: 19:46
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Site master view
    |--------------------------------------------------------------------------
    |
    | This view will be extended by the blade files in the views.site directory.
    |
    */

    'site' =>  'default.site.master',

    /*
    |--------------------------------------------------------------------------
    | Admin master view
    |--------------------------------------------------------------------------
    |
    | This view will be extended by the blade files in the views.admin directory.
    |
    */

    'admin' =>  'default.admin.master',

    /*
    |--------------------------------------------------------------------------
    | Sign up validation rules
    |--------------------------------------------------------------------------
    |
    | This is the rule array of sign up validation.
    |
    */

    'signupValidation' => [
        'name' => 'required|alpha',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed',
    ],

    /*
    |--------------------------------------------------------------------------
    | Log in validation rules
    |--------------------------------------------------------------------------
    |
    | This is the rule array of log in validation.
    |
    */

    'loginValidation' => [
        'email' => 'required',
        'password' => 'required',
    ]

];