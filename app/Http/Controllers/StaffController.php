<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Year;
use App\Models\Major;
use App\Models\Money;
use App\Models\Notice;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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
        ->orWhereHas('major',function($query) use ($search){
            $query->where('major','like',"%$search");
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
        $request->validate([
                    'no' => ["required"],
                    'date' => ["required"],
                    'notice' => ["required"],
                    'body' => ["required"],
                    'name' => ["required"],
                    'sign' => ["required"],
        ]);
       $notice=new Notice();
       $notice->no = $request->no;
       $notice->date = $request->date;
       $notice->notice = $request->notice;
       $notice->body= $request->body;
       $notice->name = $request->name;
       $notice->sign = $request->sign;
       $notice->save();
       
        return redirect('/staff/notice')->with('success', 'Notice announce successful!');
      }
      public function enroll(){
        return view('staff.enrollStudents');
      }
      public function firstYear() {
        return view('staff.firstYearStudent');
      }
      public function moneyShow() {
        return view('staff.entrance-money',[
            'years'=>Year::select()->get(),
        ]);
      }
      public function moneyStore(Request $request) {
        
        $money=new Money();
        $money->year_id= $request->year_id;
        $money->entrance=$request->entrance;
        $money->sport=$request->sport;
        $money->laboratory=$request->laboratory;
        $money->exam=$request->exam;
        $money->library=$request->library;
        $money->total=$request->total;
        $money->save();
        return redirect('/staff/moneyManagement')->with('success','Update Successfully');
      }
      public function subjectCreate(){
        return view('staff.learning-subject',[
          'years'=>Year::select()->get(),
          'majors'=>Major::select()->get(),
          'semesters'=>Semester::select()->get(),
          'subjects'=>Subject::select()->get()
        ]);
      }

      public function subjectStore(Request $request) {
        $request->validate([
                      'year_id' => ["required",Rule::exists('years','id')],
                      'major_id' => ["required",Rule::exists('majors','id')],
                      'semester_id'=>["required",Rule::exists('semesters','id')],
                      'subjectName'=>["required"],
                      'subjectCode'=>["required"]
        ]);

        $subject=new Subject();
        $subject->year_id=$request->year_id;
        $subject->major_id=$request->major_id;
        $subject->semester_id=$request->semester_id;
        $subject->subjectName=$request->subjectName;
        $subject->subjectCode=$request->subjectCode;
        $subject->save();
        
        return redirect('/staff/subjectManagement')->with('success','ဘာသာရပ် သက်မှတ်ပြီးပါပြီ');
      }
      public function edit($id) {

        $subjects=Subject::findorFail($id);
        $years=Year::all();
        $majors=Major::all();
        $semesters=Semester::all();
        return view('staff.learning-subject-update',compact('subjects','semesters','majors','years'));

      }
      public function update(Request $request,$id){

        $subjects=Subject::find($id);
        $formData=$request->validate([
                      'year_id' => ["required",Rule::exists('years','id')],
                      'major_id' => ["required",Rule::exists('majors','id')],
                      'semester_id'=>["required",Rule::exists('semesters','id')],
                      'subjectName'=>["required"],
                      'subjectCode'=>["required"]
        ]);
        $subjects->update($formData);
        return redirect('/staff/subjectManagement')->with('success','update successfully');
      }
      public function destroy($id){

        $subjects= Subject::find($id);
        $subjects->delete();
        return redirect('/staff/subjectManagement')->with('danger', 'Selected subject is deleted');
      }

}
