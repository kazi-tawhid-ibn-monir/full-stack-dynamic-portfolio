<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'bio',
        'professional_summary',
        'profile_image',
        'years_experience',
        'location',
        'email',
        'phone'
    ];
}
