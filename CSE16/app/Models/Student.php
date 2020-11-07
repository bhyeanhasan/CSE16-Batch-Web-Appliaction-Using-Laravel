<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'roll',
        'reg',
        'phone',
        'address',
        'blood_group',
        'birth_date',
        'bio',
        'profile_pic',
        'cover_pic',
    ];
}
