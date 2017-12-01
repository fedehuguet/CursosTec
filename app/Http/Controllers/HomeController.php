<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = \App\Curso::get();
        return view('welcome')->with('cursos',$cursos);
    }

    public function login() {
        if(Auth::check()){
           return view('auth.login')->with('satus','Ya iniciaste sesión'); 
        }
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }

    public function doLogin() {
        $userdata = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

        if (Auth::attempt($userdata)) {
            return Redirect::to('/');
        } else {
            return Redirect::to('login')->with('status', 'Usuario o contraseña incorrecta');
        }
    }

    public function doLogout() {
        Auth::logout();
        return Redirect::to('/');
    }
}
