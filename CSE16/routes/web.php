<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageRoute;
use App\Http\Controllers\ManageNotice;


#basic route jegula view return korbe

Route::get('/',[PageRoute::class,'welcome_page']);
Route::get('/about',[PageRoute::class,'about_page']);
Route::get('/contact',[PageRoute::class,'contact_page']);
Route::get('notice/add_notice',[PageRoute::class,'add_notice_page']);

#PostRoute form theke asa valuegula handle korbe
Route::post('post',[ManageNotice::class,'post_notice'])->name('notice_post');

#permission ase kina seta check korbe

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
