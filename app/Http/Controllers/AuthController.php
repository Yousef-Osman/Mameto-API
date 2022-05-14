<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $response = $this->tokenResponse($user);
        return response($response, 201);
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check if user exists
        if(!Auth::attempt($credentials)) {
            return response([
                'message' => 'unauthorized'
            ], 401);
        }

        $response = $this->tokenResponse(Auth::user());
        return response($response, 201);
    }

    private function tokenResponse($user){
        $token = $user->createToken('auth_token')->plainTextToken;

        return $response = [
            'user' => $user,
            'token' => $token
        ];
    }

    public function logout(Request $request) {
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Logged out']);
    }
}
