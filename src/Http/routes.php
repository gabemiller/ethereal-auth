<?php
/**
 * Created by PhpStorm.
 * User: Gábor
 * Date: 2015.06.23.
 * Time: 19:03
 */

Route::group(['namespace' => 'Ethereal\Auth\Controllers'], function () {

    Route::get(Lang::get('ethereal-auth::routes.admin-login'), 'EAuthController@getAdminLogin');

    Route::get(Lang::get('ethereal-auth::routes.login'), 'EAuthController@getLogin');

    Route::post(Lang::get('ethereal-auth::routes.login'), 'EAuthController@postLogin');

    Route::get(Lang::get('ethereal-auth::routes.signup'), 'EAuthController@getRegister');

    Route::post(Lang::get('ethereal-auth::routes.signup'), 'EAuthController@postRegister');

});

