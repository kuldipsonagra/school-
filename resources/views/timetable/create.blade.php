<!-- resources/views/timetable/create.blade.php -->

@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <span>Add Timetable Entry</span>
                <a href="{{ route('timetable.index') }}" class="btn btn-info btn-sm">Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('timetable.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="start_time">Start Time:</label>
                    <input type="time" id="start_time" name="start_time" required>
                </div>
                <div class="form-group">
                    <label for="end_time">End Time:</label>
                    <input type="time" id="end_time" name="end_time" required>
                </div>


                <div class="form-group">
                    <label for="monday_subject">Monday Subject:</label>
                    <input type="text" id="monday_subject" name="monday_subject" required>
                </div>
                <div class="form-group">
                    <label for="tuesday_subject">Tuesday Subject:</label>
                    <input type="text" id="tuesday_subject" name="tuesday_subject" required>
                </div>
                <div class="form-group">
                    <label for="wednesday_subject">Wednesday Subject:</label>
                    <input type="text" id="wednesday_subject" name="wednesday_subject" required>
                </div>
                <div class="form-group">
                    <label for="thursday_subject">Thursday Subject:</label>
                    <input type="text" id="thursday_subject" name="thursday_subject" required>
                </div>
                <div class="form-group">
                    <label for="friday_subject">Friday Subject:</label>
                    <input type="text" id="friday_subject" name="friday_subject" required>
                </div>

                <button type="submit" class="btn btn-primary">Add Entry</button>
            </form>
        </div>
    </div>
@endsection
