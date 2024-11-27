<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // dd($request->all());
        $userdata = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required',

        ]);
        if (!Auth::attempt($userdata)) {
            return response()->json(['error' => 'invalid credentials']);
        }
        $user = Auth::user();
        $token = $user->createToken('API Token')->plainTextToken;

        return response()->json(['token' => $token]);
    }

    public function register(Request $request)
    {
        $userdata = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required',

        ]);

        User::create([
            'name' => $userdata['name'],
            'email' => $userdata['email'],
            'password' => Hash::make($userdata['password']),
        ]);
    }
}
