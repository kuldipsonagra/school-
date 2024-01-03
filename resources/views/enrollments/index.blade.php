@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Enrollments Information</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm" title="Add New Enrollments">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <form action="{{ route('enrollments.index') }}" method="GET">
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

                        </form>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Enroll No</th>
                                        <th>Student</th>
                                        <th>Join Date</th>
                                        <th>Fee</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($enrollments as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->enroll_no }}</td>
                                        <td>{{ $item->student->name }}</td>
                                        <td>{{ $item->join_date }}</td>
                                        <td>{{ $item->fee }}</td>
                                        <td>
                                            <a href="{{ url('/enrollments/' . $item->id) }}" title="View Enrollments" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                            <a href="{{ url('/enrollments/' . $item->id . '/edit') }}" title="Edit Enrollments" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                            <form method="POST" action="{{ url('/enrollments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Enrollments" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
