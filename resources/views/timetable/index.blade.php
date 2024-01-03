<!-- resources/views/timetable/index.blade.php -->

@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <span>School Timetable</span>
                <a href="{{ route('timetable.create') }}" class="btn btn-success btn-sm">Add Entry</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($timetableData as $entry)
                        <tr>
                            <td>{{ $entry->start_time }} - {{ $entry->end_time }}</td>
                            <td>{{ $entry->monday_subject }}</td>
                            <td>{{ $entry->tuesday_subject }}</td>
                            <td>{{ $entry->wednesday_subject }}</td>
                            <td>{{ $entry->thursday_subject }}</td>
                            <td>{{ $entry->friday_subject }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
