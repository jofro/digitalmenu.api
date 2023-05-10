<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthRegister extends Controller
{
    public function handle(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(),
            [
                'name' =>'required',
                'email' => 'required',
                'password' => 'required'
            ]);

            if($validateUser->fails())
            {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'peticion' => $request.request(),
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return response()->json([
                'status' => true,
                'message' => 'User created succesfully',
                'token' => $user->createToken("API_TOKEN")->plainTextToken
            ], 200);

        } catch (\Throwable  $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
