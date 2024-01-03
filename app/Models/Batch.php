<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Courses;




class Batch extends Model
{
    protected $table = 'batches';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'course_id', 'start_date'];
    // In Batch model
    public function course()
    {
        return $this->belongsTo(Courses::class);
    }

}
