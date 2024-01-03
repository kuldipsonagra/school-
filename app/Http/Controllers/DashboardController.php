<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Courses;
use App\Models\Enrollment;
use App\Models\Payment;

class DashboardController extends Controller
{
    public function total_students()
    {
        $total_students  = Student::count();
        $total_teachers  = Teacher::count();
        $total_courses  = Courses::count();
        $total_enrollment  = Enrollment::count();
        $total_payment  = Payment::count();

        return view('home', compact('total_students','total_teachers','total_courses','total_enrollment','total_payment'));
    }

}
