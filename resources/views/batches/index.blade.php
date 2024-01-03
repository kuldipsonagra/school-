@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Batches Information</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/batches/create') }}" class="btn btn-success" title="Add New Batches">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <form action="{{ route('batches.index') }}" method="GET">
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
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Start Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($batches as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->course->syllabus }}</td>
                                            <td>{{ $item->start_date }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Batch Actions">
                                                    <a href="{{ url('/batches/' . $item->id) }}" title="View Batches"
                                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> View</a>
                                                    <a href="{{ url('/batches/' . $item->id . '/edit') }}"
                                                        title="Edit courses" class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

                                                    <form method="POST" action="{{ url('/batches' . '/' . $item->id) }}"
                                                        accept-charset="UTF-8" style="display:inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            title="Delete Batches"
                                                            onclick="return confirm('Confirm delete?')"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No batches found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
