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
        ['as' => 'admin.login', 'uses' => 'AuthController@getAdminLogin', 'middleware' => 'guest']);

    /**
     * Get site login view.
     */
    Route::get(trans('ethereal-auth::routes.login'),
        ['as' => 'login.get', 'uses' => 'AuthController@getLogin', 'middleware' => 'guest']);

    /**
     * Post all logins.
     */
    Route::post(trans('ethereal-auth::routes.login'),
        ['as' => 'login.post', 'uses' => 'AuthController@postLogin', 'middleware' => 'guest']);

    /**
     * Post all logouts.
     */
    Route::get(trans('ethereal-auth::routes.logout'),
        ['as' => 'logout.get', 'uses' => 'AuthController@getLogout', 'middleware' => 'auth']);

    /**
     * Get site sign up view.
     */
    Route::get(trans('ethereal-auth::routes.signup'),
        ['as' => 'signup.get', 'uses' => 'AuthController@getSignup', 'middleware' => 'guest']);

    /**
     * Post all sign ups.
     */
    Route::post(trans('ethereal-auth::routes.signup'),
        ['as' => 'signup.post', 'uses' => 'AuthController@postSignup', 'middleware' => 'guest']);

});

