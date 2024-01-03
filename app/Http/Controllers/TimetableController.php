<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Timetable;

class TimetableController extends Controller
{
    public function index()
    {
        $timetableData = Timetable::all();

        return view('timetable.index', ['timetableData' => $timetableData]);
    }

    public function create()
    {
        return view('timetable.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
            'monday_subject' => 'required',
            'tuesday_subject' => 'required',
            'wednesday_subject' => 'required',
            'thursday_subject' => 'required',
            'friday_subject' => 'required',
        ]);

        Timetable::create($request->all());

        return redirect()->route('timetable.index')->with('success', 'Timetable entry added successfully!');
    }
}
