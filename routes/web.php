<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Signupform;


Route::post('/post-data',[Signupform::class,'test']);
Route::get('/post-data',[Signupform::class,'test']);

Route::get('/', function () {
    return view('welcome');
});
