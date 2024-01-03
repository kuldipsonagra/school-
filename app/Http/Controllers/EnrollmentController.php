<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\Courses;
use App\Models\Student;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::all();
        return view('enrollments.index ', compact('enrollments'));
    }

    public function create()
    {
        $student = Student::pluck('name','id');
        return view('enrollments.create' ,compact('student'));
    }

    public function store(Request $request)
    {
        $request->validate([
            // Add validation rules for your input fields
        ]);

        $input = $request->all();
        Enrollment::create($input);

        return redirect()->route('enrollments.index')->with('success', 'enrollments Added!'); // Correct the route name
    }

    public function show($id)
    {
        $enrollments = Enrollment::find($id);
        return view('enrollments.show')->with('enrollments', $enrollments);
    }

    public function edit($id)
    {
        $enrollments = Enrollment::find($id);
        return view('enrollments.edit')->with('enrollments', $enrollments);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // Add validation rules for your input fields
        ]);

        $enrollments = Enrollment::find($id);
        $input = $request->all();
        $enrollments->update($input);

        return redirect()->route('enrollments.index')->with('success', 'enrollments Updated!'); // Correct the route name
    }

    public function destroy($id)
    {
        Enrollment::destroy($id);
        return redirect()->route('enrollments.index')->with('danger', 'enrollments deleted!'); // Correct the route name
    }
}
