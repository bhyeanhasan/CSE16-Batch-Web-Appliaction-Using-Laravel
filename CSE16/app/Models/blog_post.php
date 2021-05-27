<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_post extends Model
{
    use HasFactory;

    protected $fillable = [
        'posted_by',
        'poster_email',
        'post_heading',
        'post_body',
        'post_pictures',
    ];
}
