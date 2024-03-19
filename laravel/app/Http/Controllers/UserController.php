<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Register User
    public function register(Request $request)
    {
        // Validation
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
            'name' => 'required',
        ]);

        // Create user
        $user = User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'name' => $request->name,
        ]);

        return response()->json(['message' => 'User registered successfully', 'user' => $user]);
    }

    // Login User
    public function login(Request $request)
    {
        // Validation
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Attempt to authenticate user
        if (auth()->attempt(['username' => $request->username, 'password' => $request->password])) {
            return response()->json(['message' => 'User logged in successfully', 'user' => auth()->user()]);
        } else {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }

    // Update User
    public function update(Request $request, $id)
    {
        // Find the user
        $user = User::findOrFail($id);

        // Validation
        $request->validate([
            'username' => 'required|unique:users,username,' . $user->id,
            'name' => 'required',
        ]);

        // Update user
        $user->update([
            'username' => $request->username,
            'name' => $request->name,
        ]);

        return response()->json(['message' => 'User updated successfully', 'user' => $user]);
    }

    // Get User
    public function show($id)
    {
        // Find the user
        $user = User::findOrFail($id);

        return response()->json(['user' => $user]);
    }

    // Logout User
    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'User logged out successfully']);
    }
}
