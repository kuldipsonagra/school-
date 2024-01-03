@extends('layout')

@section('content')

<div class="card">
  <div class="card-header">Edit Teacher</div>
  <div class="card-body">

      <form action="{{ url('teachers/' . $teacher->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" value="{{ $teacher->id }}" />

        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" id="name" value="{{ $teacher->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <input type="text" name="address" id="address" value="{{ $teacher->address }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile:</label>
            <input type="text" name="mobile" id="mobile" value="{{ $teacher->mobile }}" class="form-control">
        </div>

        <!-- Gender Field -->
        <div class="mb-3">
            <label for="gender" class="form-label">Gender:</label>
            <select name="gender" id="gender" class="form-select">
                <option value="male" @if($teacher->gender == 'male') selected @endif>Male</option>
                <option value="female" @if($teacher->gender == 'female') selected @endif>Female</option>
                <!-- Add other gender options as needed -->
            </select>
        </div>

        <!-- Existing Image -->
        @if($teacher->photo)
            <img src="{{ asset('image/' . $teacher->photo) }}" alt="Teacher Photo" style="width: 100px; height: 100px; border-radius: 5px;">
        @else
            <p>No photo available</p>
        @endif

        <!-- Photo Upload -->
        <div class="mb-3">
            <label for="photo" class="form-label">Upload New Photo:</label>
            <input type="file" name="photo" id="photo" class="form-control-file">
        </div>

        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop
