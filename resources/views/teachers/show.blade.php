@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <span>Teachers Page</span>
            <a href="{{ url('/teachers') }}" class="btn btn-info btn-sm">Back</a>
        </div>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-6">
                <h5 class="card-title">Name: {{ $teacher->name }}</h5>
                <p class="card-text">Address: {{ $teacher->address }}</p>
                <p class="card-text">Mobile: {{ $teacher->mobile }}</p>



            </div>
        </div>

    </div>
</div>

@endsection
