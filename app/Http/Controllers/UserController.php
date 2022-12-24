<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller{

    public function index(){
        return view('index');
    }

    public function login(Request $request){
        // if ($request->isMethod('post')) {
        //     $login = $request->validate([
        //         'email' => 'required',
        //         'passowrd' => 'required',
        //     ]);


            //    if(!Auth::attempt($login)){
            //         return response(['message' => 'Invalid Credentials']);
            //    } 


            $user = Sample::where('email_address', '=', $request->email_address)->find(1);

            // Creating a token without scopes...
            // $user = Auth::user();
            $token = $user->createToken('Token')->accessToken;

            return response([$token]);
        
    }

    public function show(){
        $data['members'] = DB::table('sample')->get();

        return response($data)->json($data);
    }

    public function sample(){
        // $data['members'] = DB::table('sample')->get();

        // return response($data)->json($data);

        return view('index');
    }



}