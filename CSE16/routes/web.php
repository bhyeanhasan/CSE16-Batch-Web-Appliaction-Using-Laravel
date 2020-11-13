<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageRoute;
use App\Http\Controllers\ManageNotice;
use App\Http\Controllers\ManageStudent;

#basic route jegula view return korbe
Route::get('/',[PageRoute::class,'welcome_page']);
Route::get('/about',[PageRoute::class,'about_page']);
Route::get('/contact',[PageRoute::class,'contact_page']);
Route::get('notice/add_notice',[PageRoute::class,'add_notice_page']);
Route::get('/student',[ManageStudent::class,'profile_check'])->name('student');
Route::get('/student_all',[ManageStudent::class,'student_all'])->name('student_all');
Route::get('/student/{roll}',[ManageStudent::class,'public_profile']);
Route::get('/student_page/update',[ManageStudent::class,'student_update_page']);


#PostRoute form theke asa value gula database e pathabe
Route::post('post',[ManageNotice::class,'post_notice'])->name('notice_post');
Route::post('student/new',[ManageStudent::class,'student_create'])->name('student_post');
Route::post('student/edit',[ManageStudent::class,'student_edit'])->name('student_edit');
Route::post('student_pic/edit',[ManageStudent::class,'change_profile_cover'])->name('student_pic');


#database theke kno moddel er sob element view korbe
Route::get('view_notice',[ManageNotice::class,'view_all_notice'])->name('view_notice');


#Database theke kicu delete korbe
Route::get('/notice/delete/{id}',[ManageNotice::class,'delete_notice']);


#permission ase kina seta check korbe
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('logout',function () {
    Auth::logout();
    return view('welcome');
})->name('logout');
