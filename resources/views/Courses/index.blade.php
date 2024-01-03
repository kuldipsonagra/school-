@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Courses Information</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('courses/create') }}" class="btn btn-success btn-sm" title="Add New Courses">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <form action="{{ route('courses.index') }}" method="GET">
                            @if (session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('danger'))
                            <div class="alert alert-danger mt-3">
                                {{ session('danger') }}
                            </div>
                        @endif
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search by name or email" name="search" value="{{ $search }}">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">Search</button>
                                    <a href="{{url('/courses')}}">
                                        <button type="button" class="btn btn-info my-2 my-sm-0">Reset</button>
                                    </a>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Syllabus</th>
                                        <th>Duration</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($courses as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->syllabus }}</td>
                                            <td>{{ $item->duration }}</td>
                                            <td>
                                                <a href="{{ url('/courses/' . $item->id) }}" title="View course"
                                                    class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                        aria-hidden="true"></i> View</a>
                                                <a href="{{ url('/courses/' . $item->id . '/edit') }}"
                                                    title="Edit Student" class="btn btn-primary btn-sm"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                                <form method="POST"
                                                    action="{{ url('/courses' . '/' . $item->id) }}" accept-charset="UTF-8"
                                                    style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete courses"
                                                        onclick="return confirm('Confirm delete?')"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
