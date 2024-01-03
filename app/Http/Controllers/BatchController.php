<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Courses;

class BatchController extends Controller
{
    public function index()
    {
        $batches = Batch::all();
        return view('batches.index')->with('batches', $batches);
    }

    public function create()
    {
        $courses = Courses::pluck('syllabus', 'id');
        return view('batches.create', compact('courses'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'course_id' => 'required|numeric',

        ]);

        $input = $request->all();
        Batch::create($input);

        return redirect()->route('batches.index')->with('success', 'Batch Added!');
    }

    public function show($id)
    {
        $batches = Batch::find($id);
        return view('batches.show')->with('batches', $batches);
    }

    public function edit($id)
    {
        $batches = Batch::find($id);
        return view('batches.edit')->with('batches', $batches); // Corrected the variable name
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'course_id' => 'required|numeric',
            'start_date' => 'required|date_format:Y-m-d'
        ]);

        $batches = Batch::find($id);
        $input = $request->all();
        $batches->update($input);

        return redirect()->route('batches.index')->with('success', 'Batch Updated!');
    }

    public function destroy($id)
    {
        Batch::destroy($id);
        return redirect()->route('batches.index')->with('danger', 'Batch deleted!');
    }
}
