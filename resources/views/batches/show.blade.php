@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">Batches Page</div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-6">
                <h5 class="card-title">Name: {{ $batches->name }}</h5>
                <p class="card-text">Course ID: {{ $batches->course_id }}</p>
                <p class="card-text">Start Date: {{ $batches->start_date }}</p>
            </div>
        </div>

    </div>
    <!-- Remove the unnecessary </hr> tag and the duplicate card-body div -->

</div>

@endsection
