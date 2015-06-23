<?php
/**
 * Created by PhpStorm.
 * User: Gábor
 * Date: 2015.06.23.
 * Time: 18:54
 */

namespace Ethereal\Auth\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EAuthController extends Controller
{

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return view('ethereal-auth::login');
    }

    /**
     * @return mixed
     */
    public function getRegister(){
        return view('ethereal-auth::register');
    }
}