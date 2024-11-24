<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function dashboard()
    {
        // You can check if the user is authenticated before allowing access
        if (Auth::guard('admin')->check()) {
            return view('admin.dashboard');  // Render the dashboard view
        }

        return redirect()->route('admin.login');  // Redirect to login if not authenticated
    }

    /**
     * Handle admin logout.
     */
    public function logout()
    {
        Auth::guard('admin')->logout();  // Log out the admin
        return redirect()->route('admin.login');  // Redirect to the admin login page
    }
}
