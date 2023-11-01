<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticado com sucesso, gere o token
            $token = $request->user()->createToken('authToken')->plainTextToken;
            return response()->json(['token' => $token], 200);
        }

        // Se a autenticação falhar
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    public function register(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|string|min:6',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
       
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
      
        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json(['token' => $token], 201);
    }
}
