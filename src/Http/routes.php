<?php
/**
 * Created by PhpStorm.
 * User: Gábor
 * Date: 2015.06.23.
 * Time: 19:03
 */

Route::get('belepes','EAuthController@getLogin');

Route::get('regisztracio','EAuthController@getRegister');