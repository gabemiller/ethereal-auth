<?php
/**
 * Created by PhpStorm.
 * User: Gábor
 * Date: 2015.06.23.
 * Time: 19:03
 */

Route::get('belepes','Ethereal\Auth\Controllers\EAuthController@getLogin');

Route::get('regisztracio','Ethereal\Auth\Controllers\EAuthController@getRegister');