<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Check if the form submission is for login or registration
        if ($request->has('form_type')) {
            // Handle login
            if ($request->form_type == 'login') {
                // Login validation
                $request->validate([
                    'email' => 'required|email',
                    'password' => 'required|string|min:8',
                ]);

                // Attempt to log the user in
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                    return redirect()->intended('/dashboard');  // Redirect to the dashboard after login
                }

                return redirect()->back()->with('error', 'Invalid login credentials');
            }

            // Handle registration
            if ($request->form_type == 'signup') {
                // Registration validation
                $request->validate([
                    'student_id' => 'required|unique:users',
                    'name' => 'required|string|max:255',
                    'institute' => 'required|string',
                    'program' => 'required|string',
                    'sex' => 'required|string',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|string|min:8|confirmed',
                ]);

                // Create a new user
                User::create([
                    'student_id' => $request->student_id,
                    'name' => $request->name,
                    'institute' => $request->institute,
                    'program' => $request->program,
                    'sex' => $request->sex,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),  // Hash the password before storing
                ]);

                return redirect()->route('login.create')->with('success', 'Registration successful. Please login.');
            }
        }

        // If no form type is specified, redirect back
        return redirect()->route('login.create')->with('error', 'Invalid form submission');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    
}
