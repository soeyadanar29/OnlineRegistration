<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Year;
use App\Models\Notice;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
  
    public function studentLists(){

        return view('staff.studentLists',[
         
           'students'=>Student::all(),
        ]);
    }
    public function login() {
        return view('auth.login');
    }
    public function search(Request $request){
        $search = $request->search;
        $students=Student::where(function($query) use ($search){
            $query->where('rollno','like',"%$search")
            ->orwhere('name','like',"%$search");
        })
        ->orWhereHas('year',function($query) use($search){
            $query->where('year','like',"%$search");
        })
        ->orWhereHas('subject',function($query) use ($search){
            $query->where('subject','like',"%$search");
        })
        ->get();
        return view('staff.studentLists',compact('students','search'));
    }

    public function staffLogin(Request $request) {
        $formData=$request->validate( [
                          'name'   => 'required',
                          'password' => 'required'
                      ]);
              
                      if (Auth::attempt($formData)) 
                      {
                          return redirect()->intended('/staff/studentLists');
                      }
                      return back()->withInput($request->only('name', 'remember'));
      }
      public function notice(){
        return view('staff.notice');
      }
      public function storeNotice(Request $request){
        $formData=$request->validate([
                    'title' => ["required"],
                    'notice' => ["required"],
        ]);
        Notice::create($formData);
        
        return view('staff.notice');
      }

}
