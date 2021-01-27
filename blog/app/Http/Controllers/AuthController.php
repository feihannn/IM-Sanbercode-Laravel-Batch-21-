<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function datang(Request $request){
        return view("welcome");
    }
    
    public function datang_post(Request $request){
        //
        //dd($request->all());
        $namadepan=$request["nama_depan"];
        $namabelakang=$request["nama_belakang"];
        return view("welcome",["namadepan"=>$namadepan,"namabelakang"=>$namabelakang]);
    }
}
