<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum')->except('login', 'request',);
    }

    public function login(Request $request)
    {
        $request->validate(['email' => 'required|email', 'password' => 'required',]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages(['email' => ['The provided credentials are incorrect.'],]);
        }

        $token = $user->createToken('boceToken')->plainTextToken;

        return response()->json(['access_token' => $token, 'token_type' => 'bearer']);
    }

    public function user(Request $request)
    {
        return Auth::user();

    }

    public function register(Request $request)
    {
        $validated = $request->validate(['email' => 'required|email', 'password' => 'required|confirmed', 'name' => 'required|string']);

        return User::create(['email' => $request->email, 'name' => $request->name, 'password' => Hash::make($request->password)]);

    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response('Success');
    }
}
