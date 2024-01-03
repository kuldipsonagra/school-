<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search != "") {
            $students = Student::where('name', 'LIKE', "%$search%")->orwhere('address', 'LIKE', "%$search%")->get();
        } else {
            $students = Student::all();
        }

        return view('student.index', compact('students', 'search'));
    }

    public function create()
    {
        return view('student.create');
    }

 public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'mobile' => 'required|string|max:20',
        'photos' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation as needed
    ]);

    $students = new Student;
    $students->name = $request->input('name');
    $students->address = $request->input('address');
    $students->mobile = $request->input('mobile');

    // Handle photo upload
    if ($request->hasFile('photos')) {
        $file = $request->file('photos');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '_' . Str::random(8) . '.' . $extension;
        $file->move(public_path('public/image/'), $filename);
        $students->photo = $filename;
    }

    $students->save();

    return redirect()->route('student.index')->with('success', 'Student added successfully!');
}


    public function show($id)
    {
        $students = Student::find($id);
        return view('student.show')->with('student', $students);
    }

    public function edit($id)
    {
        $students = Student::find($id);
        return view('student.edit')->with('student', $students);
    }

    public function update(Request $request, $id)
    { $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'mobile' => 'required|string|max:20',
        'photos' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation as needed
    ]);

    $students =Student::find($id);
    $students->name = $request->input('name');
    $students->address = $request->input('address');
    $students->mobile = $request->input('mobile');

    // Handle photo upload
    if ($request->hasFile('photos')) {
        $file = $request->file('photos');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '_' . Str::random(8) . '.' . $extension;
        $file->move(public_path('public/image/'), $filename);
        $students->photo = $filename;
    }

    $students->save();


        return redirect()->route('student.index')->with('success', 'student Updated!'); // Correct the route name
    }

    public function destroy($id)
    {

        Student::destroy($id);
            return redirect()->route('student.index')->with('danger', 'student deleted successfully!');

    }

}
