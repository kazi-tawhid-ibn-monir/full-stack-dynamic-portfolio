<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected $fillable = [
        'degree',
        'field_of_study',
        'institution',
        'start_date',
        'end_date',
        'gpa',
        'description'
    ];

    protected $dates = [
        'start_date',
        'end_date'
    ];
}
