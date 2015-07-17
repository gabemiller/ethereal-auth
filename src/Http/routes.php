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

    /**
     * Get site login view.
     */
    Route::get(trans('ethereal-auth::routes.login'),

    /**
     * Post all logins.
     */
    Route::post(trans('ethereal-auth::routes.login'),

    /**
     * Post all logouts.
     */
    Route::get(trans('ethereal-auth::routes.logout'),

    /**
     * Get site sign up view.
     */
    Route::get(trans('ethereal-auth::routes.signup'),

    /**
     * Post all sign ups.
     */
    Route::post(trans('ethereal-auth::routes.signup'),

});

