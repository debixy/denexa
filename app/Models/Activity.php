<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'description']; // Add 'description' here

    // Define the relationship back to the User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
