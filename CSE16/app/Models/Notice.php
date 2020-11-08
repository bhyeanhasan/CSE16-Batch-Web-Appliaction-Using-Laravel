<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'notice_by',
        'notice_heading',
        'notice_body',
        'notice_link',
        'notice_picture',
    ];
}
