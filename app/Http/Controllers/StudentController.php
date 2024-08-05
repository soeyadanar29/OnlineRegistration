<?php

namespace App\Http\Controllers;

use App\Models\Year;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\learningSubject;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function show()
    {
       return view('student.dashboard');
    }
    public function subjects()
    {
        return view('student.learningSubjects');
    }
    public function login(){
        return view('auth.login');
    }
    public function studentLogin(Request $request) {
      $request->validate([
                        'name'   => 'required',
                        'password' => 'required'
                       
                    ]);
                    
                    if (Auth::guard('student')->attempt(['name' => $request->name, 'password' => $request->password])) {
                        return redirect()->intended('/student');
                       }
                       
                    
                    return back()->withInput($request->only('name', 'remember'));
    }
    public function attendance()
    {
        return view('student.attendance',[
            'student'=>Student::select()->get(),
            'years'=>Year::select()->get(),
        ]);
    }
}

   


