<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/register',[AuthController::class,'create']);
Route::post('/register',[AuthController::class,'store']);
Route::get('/register/file',[AuthController::class,'showFile']);
// Route::post('/register/file',[AuthController::class,'storeFile']);

Route::get('/login',[StudentController::class,'login']);
Route::post('/login/student',[StudentController::class,'studentLogin'])->middleware('student');
Route::post('/login/staff',[StaffController::class,'staffLogin']);

Route::get('/student',[StudentController::class,'show'])->middleware('student');
Route::get('/student/learningSubjects',[StudentController::class,'subjects']);
Route::get('/student/attendance',[StudentController::class,'attendance']);
Route::get('/student/notice',[StudentController::class,'viewNotice']);
Route::get('/student/notice/{notice}',[StudentController::class,'viewNoticePost']);


Route::get('/staff/studentLists',[StaffController::class,'studentLists']);
Route::get('/staff/enrollStudents',[StaffController::class,'enroll']);
Route::get('/staff/firstYearStudents',[StaffController::class,'firstYear']);
Route::get('/staff/notice',[StaffController::class,'notice']);
Route::post('/staff/notice',[StaffController::class,'storeNotice']);
Route::get('/staff/moneyManagement',[StaffController::class,'moneyShow']);
Route::post('/staff/moneyManagement',[StaffController::class,'moneyStore']);
Route::get('/staff/subjectManagement',[StaffController::class,'subjectCreate']);
Route::post('/staff/subjectManagement',[StaffController::class,'subjectStore']);
Route::get('/staff/subjectManagement/update/{id}',[StaffController::class,'edit']);
Route::patch('/staff/subjectManagement/update/{id}',[StaffController::class,'update']);
Route::delete('/staff/subjectManagement/delete/{id}',[StaffController::class,'destroy']);

Route::get('/search',[StaffController::class,'search']);