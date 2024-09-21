<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AuthService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    protected $authService;

    // Constructor to inject AuthService dependency
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Show registration form
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Handle user registration
    public function register(Request $request)
    {
        // Validate user input
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the user through the AuthService
        $user = $this->authService->register($request->all());

        // Automatically log in the user after registration
        Auth::login($user);

        // Redirect to KYC form with a success message
        return redirect()->route('kyc.form')->with('success', 'Registration successful! Please complete your KYC.');
    }

    // Show KYC form
    public function showKycForm()
    {
        return view('auth.kyc'); // Return the KYC form view
    }

    public function submitKyc(Request $request)
    {
        // Validate the KYC form data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'birthday' => 'required|date',
            'country' => 'required|string|max:255',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update the user's KYC information
        $user = Auth::user();
        $user->update($request->only('first_name', 'last_name', 'phone', 'address', 'birthday', 'country'));

        // Create an activity log for KYC completion
        $user->activities()->create([
            'description' => 'Completed KYC process.',
        ]);

        // Redirect to the dashboard with a success message
        return redirect()->route('dashboard.index')->with('success', 'KYC information submitted successfully.');
    }

    // Handle user login
    public function login(Request $request)
    {
        // Validate login credentials
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt login using AuthService
        if ($this->authService->login($credentials)) {
            return redirect()->route('dashboard')->with('success', 'Login successful.');
        }

        // If login fails, redirect back with an error message
        return redirect()->back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
    }

    // Handle user logout
    public function logout()
    {
        // Log the user out via AuthService
        $this->authService->logout();

        // Redirect to login page with a success message
        return redirect()->route('login')->with('success', 'Logout successful.');
    }
}
