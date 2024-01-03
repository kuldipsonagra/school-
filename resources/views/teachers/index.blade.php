@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Teachers Information</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/teachers/create') }}" class="btn btn-success btn-sm" title="Add New teachers">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br />
                        <br />
                        <form action="{{ route('teachers.index') }}" method="GET">
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
                                <input type="text" class="form-control" placeholder="Search by name or email"
                                    name="search" value="{{ $search }}">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">Search</button>
                                    <a href="{{ url('/teachers') }}" class="btn btn-info ml-2">Reset</a>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>PHOTO</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>GENDER</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teachers as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if ($item->photo)
                                                    <img src="{{ asset('public/image/' . $item->photo) }}"
                                                        alt="Student Photo" style="width: 100px; height: 100px;">
                                                @else
                                                    @if ($item->gender == 'male')
                                                        <img src="{{ asset('STUDENT_BOY.jpg') }}" alt="No Photo"
                                                            style="width: 100px; height: 100px; border-radius: 5px;">
                                                    @else
                                                    <img src="{{ asset('STUDENT_GIRL1.png') }}" alt="No Photo"
                                                    style="width: 100px; height: 100px; border-radius: 5px;">
                                                    @endif
                                                @endif
                                            </td>

                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->mobile }}</td>
                                            <td>{{ $item->gender }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Teacher Actions">
                                                    <a href="{{ url('/teachers/' . $item->id) }}" title="View teachers"
                                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> View</a>
                                                    <a href="{{ url('/teachers/' . $item->id . '/edit') }}"
                                                        title="Edit teachers" class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

                                                    <form method="POST" action="{{ url('/teachers' . '/' . $item->id) }}"
                                                        accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            title="Delete teachers"
                                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete</button>
                                                    </form>
                                                </div>
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
