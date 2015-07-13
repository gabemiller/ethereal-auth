<?php
/**
 * Created by PhpStorm.
 * User: Gábor
 * Date: 2015.06.23.
 * Time: 19:03
 */

Route::group(['namespace' => 'Ethereal\Auth\Controllers'], function () {

    /**
     * Get admin login view.
     */
    Route::get(trans('ethereal-auth::routes.adminLogin'),
        ['as'=>'adminLogin', 'uses'=>'AuthController@getAdminLogin']);

    /**
     * Get site login view.
     */
    Route::get(trans('ethereal-auth::routes.login'),
        ['as'=>'loginGet','uses'=>'AuthController@getLogin']);

    /**
     * Post all logins.
     */
    Route::post(trans('ethereal-auth::routes.login'),
        ['as'=>'loginPost','uses'=>'AuthController@postLogin']);

    /**
     * Post all logouts.
     */
    Route::get(trans('ethereal-auth::routes.logout'),
        ['as'=>'logoutGet','uses'=>'AuthController@getLogout']);

    /**
     * Get site sign up view.
     */
    Route::get(trans('ethereal-auth::routes.signup'),
        ['as'=>'signupGet','uses'=>'AuthController@getSignup']);

    /**
     * Post all sign ups.
     */
    Route::post(trans('ethereal-auth::routes.signup'),
        ['as'=>'signupPost','uses'=>'AuthController@postSignup']);

});

