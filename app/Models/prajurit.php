<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class prajurit extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;


    protected $fillable = [
        'nrp',
        'pangkat',
        'name',
        'korps',
        'password',
        'jabatan',
        'departement',
        'phone',
        'face_embedding',
        'image_url',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
