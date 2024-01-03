<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Courses;
use App\Models\Student;
use App\Models\Batch;




class Enrollment extends Model
{
    protected $table = 'enrollments';
    protected $primaryKey = 'id';
    protected $fillable = ['enroll_no', 'batch_id', 'student_id', 'join_date', 'fee'];
    // In Batch model
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

}
