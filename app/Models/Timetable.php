<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_time',
        'end_time',
        'monday_subject',
        'tuesday_subject',
        'wednesday_subject',
        'thursday_subject',
        'friday_subject',
        // Add more fields if needed
    ];
}
