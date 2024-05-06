<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function getLogin()
    {
        if (auth()->check()) {
            return redirect()->route('get.index');
        }
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
                'remember' => 'sometimes'
            ]);
            $user = User::query()->where('email', $validatedData['email'])->first();
            if ($user) {
                if (Hash::check($validatedData['password'], $user['password'])) {
                    auth()->login($user);
                    return response()->json([
                        'success' => true,
                        'message' => 'Login successful'
                    ]);
                }
            }
            return response()->json([
                'success' => false,
                'message' => 'Invalid email/password'
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 422);
        }
    }

    public function getRegister()
    {
        if (auth()->check()) {
            return redirect()->route('get.index');
        }
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required'
            ]);
            $user = User::query()->create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => $validatedData['password'],
            ]);
            auth()->login($user);
            return response()->json([
                'success' => true,
                'message' => 'Registration successful'
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 422);
        }
    }
}
