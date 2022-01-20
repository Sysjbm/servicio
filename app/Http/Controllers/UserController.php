<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function store(Request $request){
    	$input = $request->all();
    	$input['password'] = Hash::make($request->password);
    	User::create($input);
    	return response()->json([
    		'res' =>  true,
    		'message' => "Usuario creado"
    	]);
    }

    public function login(Request $request){
    	$user = User::whereEmail($request->email)->first();
    	if(!is_null($user) && Hash::check($request->password, $user->password)){

    		$user->api_token = Str::random(60);
    		$user->save();

	    	return response()->json([
	    		'res' =>  true,
	    		'token' => $user->api_token,
	    		'message' => "Welcome"
	    	]);
    	}else{
    		return response()->json([
    		'res' =>  true,
    		'message' => "Autenticación fallida"
    		]);
    	}
    }
}
