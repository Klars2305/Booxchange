<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/choice';  // Default redirection after user login

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Handle the login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if the email is for an admin
        if ($this->isAdminEmail($request->email)) {
            // Admin login logic
            $admin = Admin::where('emailaddress', $request->email)->first();

            // If the admin exists and credentials are correct, log them in
            if ($admin && Auth::guard('admin')->attempt($request->only('emailaddress', 'password'))) {
                return redirect()->route('admin');  // Redirect to the admin dashboard
            }

            // If admin login fails
            return back()->withErrors(['emailaddress' => 'Admin credentials are incorrect.']);
        }

        // User login logic (default for regular users)
        if (Auth::guard('web')->attempt($request->only('email', 'password'))) {
            return redirect()->route('choice');  // Redirect to user dashboard or choice page
        }

        // If both user and admin login fail
        return back()->withErrors(['email' => 'User credentials are incorrect.']);
    }

    /**
     * Helper method to check if the email belongs to an admin.
     *
     * @param  string  $email
     * @return bool
     */
    private function isAdminEmail($email)
    {
        // Check if the email exists in the Admin model (admins table)
        return Admin::where('emailaddress', $email)->exists();  // Use 'emailaddress' here
    }

    protected function loggedOut(Request $request)
{
    return redirect('/homepage');
}
}
