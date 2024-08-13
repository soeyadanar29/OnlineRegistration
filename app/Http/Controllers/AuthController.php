<?php

namespace App\Http\Controllers;


use App\Models\Year;
use App\Models\Major;
use App\Models\Nation;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;




class AuthController extends Controller
{
    public function create(){
        
        return view('auth.register',[
            'years'=>Year::select()->get(),
            'majors'=>Major::select()->get(),
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
        $student->major_id = $request->major_id;
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

        $student->exams= $request->json_encode(['exams']);

        $student->PName= $request->PName;
        $student->relation= $request->relation;
        $student->PJob= $request->PJob;
        $student->PAddress= $request->PAddress;
        $student->Pphone= $request->Pphone;
        $student->permission= $request->permission;
        $student->thumbnail=$request->file('thumbnail')?$request->file('thumbnail')->store('thumbnails'):null;

        $student->wardPermission=$request->file('wardPermission') ? $request->file('wardPermission')->store('thumbnails'):null;
        $student->policePermission=$request->file('policePermission')?$request->file('policePermission')->store('thumbnails'):null;
        $student->marks=$request->file('totalMarks')?$request->file('totalMarks')->store('thumbnails'):null;
        $student->familyFile=$request->file('familyFile')?$request->file('familyFile')->store('thumbnails'):null;
        $student->certification=$request->file('certificate')?$request->file('certificate')->store('thumbnails'):null;
        $student->nrcFile=$request->file('nrcFile')?$request->file('nrcFile')->store('thumbnails'):null;
        $student->fatherNrcFile=$request->file('fatherNrcFile')?$request->file('fatherNrcFile')->store('thumbnails'):null;
        $student->motherNrcFile=$request->file('motherNrcFile')?$request->file('motherNrcFile')->store('thumbnails'):null;
        $student->covid_permission=$request->file('covid')?$request->file('covid')->store('thumbnails'):null;
        $student->save();
        
        return redirect('/register')->with('success', 'ကျောင်းဝင်ခွင့်ဖောင် ဖြည့်သွင်းပြီးပါပြီ');
        
    }
    public function showFile(Student $student){
        return view('auth.register-file',[
            'student'=>$student,
        ]);
    }

    public function storeFile(Request $request,Student $student){

        // $studentId=$student->id;
        // $student = Student::findOrFail($studentId);

        // $file = new studentFile();
        // $file->wardPermission=$request->file('wardPermission') ? $request->file('wardPermission')->store('thumbnails'):null;
        // $file->policePermission=$request->file('policePermission')?$request->file('policePermission')->store('thumbnails'):null;
        // $file->marks=$request->file('totalMarks')?$request->file('totalMarks')->store('thumbnails'):null;
        // $file->familyFile=$request->file('familyFile')?$request->file('familyFile')->store('thumbnails'):null;
        // $file->certification=$request->file('certificate')?$request->file('certificate')->store('thumbnails'):null;
        // $file->nrcFile=$request->file('nrcFile')?$request->file('nrcFile')->store('thumbnails'):null;
        // $file->fatherNrcFile=$request->file('fatherNrcFile')?$request->file('fatherNrcFile')->store('thumbnails'):null;
        // $file->motherNrcFile=$request->file('motherNrc')?$request->file('motherNrcFile')->store('thumbnails'):null;
        // $file->covid_permission=$request->file('covid')?$request->file('covid')->store('thumbnails'):null;
        // $file->save();
        
        // $fileInputs = [
        //     'wardPermission',
        //     'policePermission',
        //     'totalMarks',
        //     'familyFile',
        //     'certificate',
        //     'nrcFile',
        //     'fatherNrcFile',
        //     'motherNrcFile',
        //     'covid'
        // ];
        // foreach ($fileInputs as $input) {
        //     if ($request->hasFile($input)) {
        //         // Store the file in the 'thumbnails' folder (or any folder you choose)
        //         $path = $request->file($input)->store('thumbnails');
    
        //         // Save the file information in the database
        //         $file = new studentFile();
        //         $file->studentId = $student->id;
        //         $file->file_type = $input; // Save the file type (input name) for reference
        //         $file->file_path = $path; // Save the path to the database
        //         $file->save();
        //     }
        

        return view('auth.register-file');
    }
   
}
    

