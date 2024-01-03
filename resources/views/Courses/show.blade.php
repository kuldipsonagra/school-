@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <span>Courses Page</span>
            <a href="{{ url('/courses') }}" class="btn btn-info btn-sm">Back</a>
        </div>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-6">
                <h5 class="card-title">Name: {{ $courses->name }}</h5>
                <p class="card-text">Syllabus: {{ $courses->syllabus }}</p>
                <p class="card-text">Duration: {{ $courses->duration }}</p>
            </div>
        </div>

    </div>
    <!-- Remove the unnecessary </hr> tag -->

</div>

@endsection
