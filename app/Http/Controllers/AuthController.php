<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function register(Request $request){
        $field = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $field['name'],
            'email' => $field['email'],
            'password' => bcrypt($field['password']),
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    function login(Request $request){
        $field = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $field['email'])->first();

        if(!$user || !Hash::check($field['password'], $user->password)) {
            return response([
                'message' => 'Wrong password or User not exist'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    function logout(Request $request){
        auth()->user()->tokens()->delete();

        return [
            'messate' => 'Logged out'
        ];
    }
}
