<?php

namespace App\Rules;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class UniqueUsername implements Rule
{
    public function passes($attribute, $value)
    {
        return !User::where('username', $value)->exists();
    }

    public function message()
    {
        return 'The username has already been taken.';
    }
}
