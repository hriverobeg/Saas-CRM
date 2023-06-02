<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'admin';

    public const NOMBRE = 'nombre';
    public const EMAIL = 'email';
    public const PASSWORD = 'password';
    public const REMEMBER_TOKEN = 'remember_token';

    protected $fillable = [
        'nombre', 'email', 'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
