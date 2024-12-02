<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Signupform;


Route::post('/post-data',[Signupform::class,'test']);
Route::get('/post-data',[Signupform::class,'getdata']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
