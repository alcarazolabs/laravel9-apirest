<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    
    public function login_api(Request $request){
        
        if(!Auth::attempt($request->only('email', 'password'))){

           $result = [
            'user' => null,
            'access_token' => null,
            'token_type' => null,
            'message' => 'Credenciales no validas',
            'success' => false,
            'status' => 200
           ];
           return response()->json([
             'result' => [$result],
           ], 200);

        }else{

         $user = User::where('email', $request['email'])->firstOrFail();
         $token = $user->createToken('auth_token')->plainTextToken;
         $result = [
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer',
            'message' => 'Credenciales validas',
            'success' => true,
            'status' => 200
         ];
         return response()->json([
            'result' => [$result],
           ], 200);
        }

   
      }



}
