<?php
/**
 * Created by PhpStorm.
 * User: Gábor
 * Date: 2015.06.23.
 * Time: 19:03
 */

Route::group(['namespace' => 'Ethereal\Auth\Controllers'], function () {

    Route::get('/admin/bejelentkezes', 'EAuthController@getAdminLogin');

    Route::get('/bejelentkezes', 'EAuthController@getLogin');

    Route::post('/bejelentkezes', 'EAuthController@postLogin');

    Route::get('/regisztracio', 'EAuthController@getRegister');

    Route::post('/regisztracio', 'EAuthController@postRegister');

});

