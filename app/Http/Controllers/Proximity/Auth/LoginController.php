<?php

namespace App\Http\Controllers\Proximity\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('Prøxïmïtÿ.Auth.login');
    }
}
