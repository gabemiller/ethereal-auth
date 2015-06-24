<?php
/**
 * Created by PhpStorm.
 * User: Gábor
 * Date: 2015.06.23.
 * Time: 19:03
 */

Route::group(['namespace' => 'Ethereal\Auth\Controllers'], function () {

    Route::get('admin', 'EAuthController@getAdminLogin');

    Route::get(trans('ethereal-auth::routes.admin-login'), 'EAuthController@getAdminLogin');

    Route::get(trans('ethereal-auth::routes.login'), 'EAuthController@getLogin');

    Route::post(trans('ethereal-auth::routes.login'), 'EAuthController@postLogin');

    Route::get(trans('ethereal-auth::routes.signup'), 'EAuthController@getRegister');

    Route::post(trans('ethereal-auth::routes.signup'), 'EAuthController@postRegister');

});

