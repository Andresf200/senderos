<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    const USUARIO_ADMINISTRADOR = true;
    const USUARIO_REGULAR = false;

    protected $fillable = [
        'name',
        'last_name',
        'identifier',
        'phone',
        'address',
        'municipality_id',
        'password',
        'email',
        'admin'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function isAdmin(): bool
    {
        if($this->admin == User::USUARIO_ADMINISTRADOR)
        {
            return User::USUARIO_ADMINISTRADOR;
        }
        return User::USUARIO_REGULAR;
    }

    public function headquarter(): BelongsTo
    {
        return $this->belongsTo(Headquarters::class, 'customer_id');
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

}
