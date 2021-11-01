<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        return view('Teacher.teacher-layout');
    }
    public function dashboard(){
        return view('Teacher.Auth.dashboard');
    }
    public function students(){
        return view('Teacher.Auth.students');
    }
}
