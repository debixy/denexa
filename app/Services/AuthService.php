<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Events\UserRegistered;
use App\Repositories\UserRepository;

class AuthService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Register a new user
     *
     * @param array $data
     * @return User
     */
    public function register(array $data)
    {
        // Hash the password before saving
        $data['password'] = Hash::make($data['password']);
        $user = $this->userRepository->create($data);

        // Fire an event after registration
        event(new UserRegistered($user));

        return $user;
    }

    /**
     * Authenticate a user (login)
     *
     * @param array $credentials
     * @return bool
     */
    public function login(array $credentials)
    {
        if (Auth::attempt($credentials)) {
            return true;
        }

        return false;
    }

    /**
     * Logout the currently authenticated user
     */
    public function logout()
    {
        Auth::logout();
    }
}
