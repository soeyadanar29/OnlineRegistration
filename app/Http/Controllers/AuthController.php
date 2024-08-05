<?php

namespace App\Http\Controllers;

use App\Models\Year;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;




class AuthController extends Controller
{
    public function create(){
        
        return view('auth.register',[
            'years'=>Year::select()->get(),
            'subjects'=>Subject::select()->get()
        ]);
    }

    public function store(Request $request){
     
        // dd($request->all());
        $student = new Student();
        $student->year_id = $request->year_id;
        $student->subject_id = $request->subject_id;
        $student->entrance_year = $request->Eyear;
        $student->rollno= $request->rollNo;
        $student->name = $request->name;
        $student->fatherName = $request->fatherName;
        $student->motherName = $request->motherName;
        $student->nationality = $request->nationality;
        $student->fatherNationality = $request->nationalityFather;
        $student->motherNationality= $request->nationalityMother;
        $student->religion = $request->religion;
        $student->fatherReligion = $request->religionFather;
        $student->motherReligion = $request->religionMother;
        $student->birthplace = $request->birthplace;
        $student->nrc = $request->nrc;
        $student->fatherNrc = $request->fatherNrc;
        $student->motherNrc = $request->motherNrc;
        $student->birth_date= $request->birthDate;
        $student->phone= $request->phone;
        $student->fatherPhone= $request->fatherPhone;
        $student->motherPhone= $request->motherPhone;
        $student->address= $request->living;
        $student->password=$request->password;
        $student->thumbnail=$request->file('thumbnail')->store('thumbnails');
        $student->save();
        return redirect('/register')->with('success', 'Registration successful!');

    //     $formData=$request->validate([
    //         'year_id' => ["required",Rule::exists('years','id')],
    //         'subject_id' => ["required",Rule::exists('subjects','id')],
    //         'rollNo'=>["required"],
    //         'entrance_year'=>["required"],
    //         'name' => ["required"],
    //         'fatherName' => ["required"],
    //         'motherName' => ["required"],
    //         'nationality' => ["required"],
    //         'nationalityFather' => ["required"],
    //         'nationalityMother' => ["required"],
    //         'religion' => ["required"],
    //         'religionFather' => ["required"],
    //         'religionMother' => ["required"],
    //         'birthplace' => ["required"],
    //         'nrc' => ["required"],
    //         'fatherNrc' => ["required"],
    //         'motherNrc' => ["required"],
    //         'birthDate' => ["required"],
    //         'phone' => ["required"],
    //         'fatherPhone' => ["required"],
    //         'motherPhone' => ["required"],
    //         'living' => ["required"],
    //         'password'=>["required"],
    //    ]);
    
    // $formData['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
    
    // $formData = $request->all();
    // Student::create($formData);
    // return redirect('/')->with('success', 'Registration successful!');
    }
   
  
}
    

