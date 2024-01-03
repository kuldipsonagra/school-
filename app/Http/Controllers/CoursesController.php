<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Courses;

class CoursesController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search != "") {
            $courses = Courses::where('name', 'LIKE', "%$search%")->orwhere('syllabus', 'LIKE', "%$search%")->get();
        }
       else{
        $courses = Courses::all();
       }

        return view('Courses.index', compact('courses','search'));
    }


    public function create()
    {
        return view('Courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Add validation rules for your input fields
        ]);

        $input = $request->all();
        Courses::create($input);

        return redirect()->route('courses.index')->with('success', 'courses Added!'); // Correct the route name
    }

    public function show($id)
    {
        $courses = Courses::find($id);
        return view('courses.show')->with('courses', $courses);
    }

    public function edit($id)
    {
        $courses = Courses::find($id);
        return view('courses.edit')->with('courses', $courses);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // Add validation rules for your input fields
        ]);

        $courses = Courses::find($id);
        $input = $request->all();
        $courses->update($input);

        return redirect()->route('courses.index')->with('success', 'Courses Updated!'); // Correct the route name
    }

    public function destroy($id)
    {
        Courses::destroy($id);
        return redirect()->route('courses.index')->with('danger', 'Courses deleted!'); // Correct the route name
    }
}
