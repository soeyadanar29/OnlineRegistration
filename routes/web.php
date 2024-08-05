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

Route::get('/login',[StudentController::class,'login']);
Route::post('/login/student',[StudentController::class,'studentLogin'])->middleware('student');
Route::post('/login/staff',[StaffController::class,'staffLogin']);

Route::get('/student',[StudentController::class,'show'])->middleware('student');
Route::get('/student/learningSubjects',[StudentController::class,'subjects']);
Route::get('/student/attendance',[StudentController::class,'attendance']);

Route::get('/staff/studentLists',[StaffController::class,'studentLists']);
Route::get('/staff/notice',[StaffController::class,'notice']);
Route::post('/staff/notice',[StaffController::class,'storeNotice']);
Route::get('/search',[StaffController::class,'search']);