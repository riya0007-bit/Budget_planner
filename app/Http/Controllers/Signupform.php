<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Signup;
use Illuminate\Http\Request;

class Signupform extends Controller
{
    public function test(Request $request){
        $validate = $request->validate([
            'name' => 'required|string',
            'mobile' => 'required|string',
            'email' => 'required|string|unique:signup,email',
        ]);
        

     
        Signup::create([
            'name' => $request['name'],
            'mobile' => $request['mobile'],
            'password' => $request['password'],
            'email' => $request['email']
        ]); // the command is basically used to create the new user 
        return response()->json(['message' => 'User created successfully.']);
    }
    public function getdata(){
        $data = Signup::all();
        return $data;
    }
}
