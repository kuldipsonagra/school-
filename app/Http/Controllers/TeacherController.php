<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher; // Correct the model name to follow Laravel naming conventions

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search != "") {
            $teachers = Teacher::where('name', 'LIKE', "%$search%")->orwhere('address', 'LIKE', "%$search%")->get();
        } else {
            $teachers = Teacher::all();
        }

        return view('teachers.index', compact('teachers', 'search'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'gender' => 'required|in:male,female', // Adjust the gender validation as needed
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation as needed
        ]);

        $input = $request->all();

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('public/image/'), $filename);
            $input['photo'] = $filename;
        }

        Teacher::create($input);

        return redirect()->route('teachers.index')->with('success', 'Teacher added successfully!');
    }

    public function show($id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.show')->with('teacher', $teacher);
    }

    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.edit')->with('teacher', $teacher);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'gender' => 'required|in:male,female', // Adjust the gender validation as needed
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation as needed
        ]);

        $teacher = Teacher::find($id);
        $input = $request->all();

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('teacher_photos/'), $filename);
            $input['photo'] = $filename;
        }

        $teacher->update($input);

        return redirect()->route('teachers.index')->with('success', 'Teacher Updated!');
    }


    public function destroy($id)
    {

            Teacher::destroy($id);
            return redirect()->route('teachers.index')->with('danger', 'Teacher deleted successfully!');

    }

}
