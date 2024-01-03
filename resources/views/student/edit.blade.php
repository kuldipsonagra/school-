@extends('layout')

@section('content')

<div class="card">
  <div class="card-header">Edit Student</div>
  <div class="card-body">

      <form action="{{ url('student/' .$student->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" value="{{$student->id}}" />

        <label>Name</label><br>
        <input type="text" name="name" value="{{$student->name}}" class="form-control"><br>

        <label>Address</label><br>
        <input type="text" name="address" value="{{$student->address}}" class="form-control"><br>

        <label>Mobile</label><br>
        <input type="text" name="mobile" value="{{$student->mobile}}" class="form-control"><br>

        <!-- Existing Image -->
        @if($student->photo)
            <img src="{{ asset('public/image/' . $student->photo) }}" alt="Student Photo" style="width: 100px; height: 100px; border-radius: 5px;">
        @else
            <p>No photo available</p>
        @endif

        <!-- Image Upload -->
        <label>Upload New Image</label><br>
        <input type="file" name="photos" class="form-control-file"><br>

        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop
