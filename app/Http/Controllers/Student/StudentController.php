<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('Student.student-layout');
    }

    public function studentChoice(){
        return view('Student.student-choice-layout');
    }
}
