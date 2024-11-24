<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    // Define the table name (if it's not 'admins')
    protected $table = 'admin';  // Adjust the table name if it differs

    // The attributes that are mass assignable
    protected $fillable = [
        'id',
        'full_name',
        'age',
        'sex',
        'emailaddress',
        'password',
    ];

    // The attributes that should be hidden for arrays
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // The attributes that should be cast to native types
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
