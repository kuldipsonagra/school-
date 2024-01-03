<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = '_tearchs';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile','gender','photo'];
}
