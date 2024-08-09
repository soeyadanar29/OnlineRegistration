<?php

namespace App\Http\Controllers;

use App\Models\Year;
use App\Models\Nation;
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
            'subjects'=>Subject::select()->get(),
            'nations'=>Nation::select()->get()
        ]);
    }

    public function store(Request $request){
     
        // dd($request->all());
        // $request->validate([
        //             'year_id' => ["required",Rule::exists('years','id')],
        //             'subject_id' => ["required",Rule::exists('subjects','id')],
        //             'rollNo'=>["required"],
        //             'entrance_year'=>["required"],
        //             'name' => ["required"],
        //             'fatherName' => ["required"],
        //             'motherName' => ["required"],
        //             'nationality' => ["required"],
        //             'nationalityFather' => ["required"],
        //             'nationalityMother' => ["required"],
        //             'religion' => ["required"],
        //             'religionFather' => ["required"],
        //             'religionMother' => ["required"],
        //             'birthplace' => ["required"],
        //             'nrc' => ["required"],
        //             'fatherNrc' => ["required"],
        //             'motherNrc' => ["required"],
        //             'birthDate' => ["required"],
        //             'phone' => ["required"],
        //             'fatherPhone' => ["required"],
        //             'motherPhone' => ["required"],
        //             'living' => ["required"],
        //             'password'=>["required"],
        //        ]);
        $student = new Student();
        $student->year_id = $request->year_id;
        $student->subject_id = $request->subject_id;
        $student->rollno= $request->rollNo;
        $student->entrance_year = $request->Eyear;
       
        $student->nameMyan = $request->nameMyan;
        $student->fatherNameMyan = $request->fatherNameMyan;
        $student->motherNameMyan = $request->motherNameMyan;

        $student->nameEng = $request->nameEng;
        $student->fatherNameEng = $request->fatherNameEng;
        $student->motherNameEng = $request->motherNameEng;

        $student->nationality = $request->nationality;
        $student->fatherNationality = $request->nationalityFather;
        $student->motherNationality= $request->nationalityMother;

        $student->religion = $request->religion;
        $student->fatherReligion = $request->religionFather;
        $student->motherReligion = $request->religionMother;

        $student->birthplace = $request->birthplace;
        $student->birthplaceFather = $request->birthplaceFather;
        $student->birthplaceMother = $request->birthplaceMother;

        $student->state = $request->state;
        $student->fatherState = $request->fatherState;
        $student->motherState = $request->motherState;

        $student->nrc = $request->nrc;
        $student->fatherNrc = $request->fatherNrc;
        $student->motherNrc = $request->motherNrc;

        $student->nation_id = $request->nation_id;

        $student->birth_date= $request->birthDate;
        $student->Mrollno= $request->Mrollno;
        $student->Myear= $request->Myear;
        $student->testPlace= $request->testPlace;
        $student->fullAdd= $request->fullAdd;
        $student->phone= $request->phone;

        $student->fatherJob= $request->fatherJob;
        $student->motherJob= $request->motherJob;

        $student->PName= $request->PName;
        $student->relation= $request->relation;
        $student->PJob= $request->PJob;
        $student->PAddress= $request->PAddress;
        $student->Pphone= $request->Pphone;
        $student->permission= $request->permission;
        $student->thumbnail=$request->file('thumbnail')->store('thumbnails');
        $student->save();
        return redirect('/register')->with('success', 'Registration successful!');
    }
    public function showFile(){
        return view('auth.register-file');
    }
    public function storeFile(){

        return redirect('/register/next');
    }
   
  
}
    

