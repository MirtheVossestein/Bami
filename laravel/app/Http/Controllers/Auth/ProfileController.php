<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class ProfileController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // If successful, then redirect to their intended location
            return redirect()->intended(route('dashboard'));
        } else {
            // If unsuccessful, then redirect back to the login with form data
            return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
                'login_error' => 'These credentials do not match our records.',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'password' => 'required|min:6',
        ]);
    
        // Create the user
        $user = new User;
        $user->email = $validatedData['email'];
        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->phone = $validatedData['phone'];
        $user->password = Hash::make($validatedData['password']); // Ensure the password is hashed
        $user->save(); // Save the user to the database
    
        // Redirect or return response
        return redirect('/index')->with('success', 'Registration successful.');
    }
    
    public function register(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);
    
        // Create and save the user
        $user = new User;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();
    
        // Optionally log the user in
        Auth::login($user);
    
        // Redirect to a specific route after registration
        return redirect()->route('dashboard')->with('success', 'Registration successful.');
    }
} // Ensure this closing brace is present to properly close the class definition