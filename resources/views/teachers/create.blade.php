@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">Teacher page</div>
    <div class="card-body">

        <form action="{{ url('teachers') }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <input type="text" name="address" id="address" class="form-control">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile:</label>
                <input type="text" name="mobile" id="mobile" class="form-control">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <select name="gender" id="gender" class="form-select">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <!-- Add other gender options as needed -->
                </select>
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo:</label>
                <input type="file" name="photo" id="photo" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>

    </div>
</div>

@stop
