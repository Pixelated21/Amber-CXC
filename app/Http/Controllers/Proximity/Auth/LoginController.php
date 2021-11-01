<?php

namespace App\Http\Controllers\Proximity\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('Prøxïmïtÿ.Auth.login');
    }

    public function logout(){
        sleep(1);
        Auth::logout();

        return redirect()->route('prox-login');

    }
}
