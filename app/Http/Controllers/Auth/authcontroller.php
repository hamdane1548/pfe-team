<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registre(Request $request)
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            $response = ['status' => 200, 'message' => 'Registration successful'];
            return response()->json($response);
        } catch (\Exception $e) {
            $response = ['status' => 500, 'message' => $e->getMessage()];
            return response()->json($response);
        }
    }

    public function login(Request $request)
    {
        try {
            $user = User::where('email', $request->email)->first();
            if ($user && Hash::check($request->password, $user->password)) {
                $token = $user->createToken('authToken')->plainTextToken;
                $response = ['status' => 200, 'message' => 'Login successful', 'token' => $token];
            } else {
                $response = ['status' => 401, 'message' => 'Invalid credentials'];
            }
            return response()->json($response);
        } catch (\Exception $e) {
            $response = ['status' => 500, 'message' => $e->getMessage()];
            return response()->json($response);
        }
    }
}
