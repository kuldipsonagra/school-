<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ExamTimetable;

class ExamController extends Controller
{
    public function index()
    {
        $exams = ExamTimetable::all();
        return view('exams.index', compact('exams'));
    }

    public function create()
    {
        return view('exams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        ExamTimetable::create($request->all());

        return redirect('/exams')->with('success', 'Exam created successfully.');
    }
    public function edit($id)
    {
        $exam = ExamTimetable::find($id);
        return view('exams.create', compact('exam'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'subject' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        $exam = ExamTimetable::find($id);
        $exam->update($request->all());

        return redirect('/exams')->with('success', 'Exam updated successfully.');
    }

    public function destroy($id)
    {
        $exam = ExamTimetable::find($id);
        $exam->delete();

        return redirect('/exams')->with('success', 'Exam deleted successfully.');
    }
}
