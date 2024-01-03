@extends('layout')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Payments Information</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/payments/create') }}" class="btn btn-success btn-sm" title="Add New payments">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <form action="{{ route('payments.index') }}" method="GET">
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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Enroll_NO</th>
                                        <th>PAID_DATE</th>
                                        <th>AMOUNT</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payments as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->enrollment->enroll_no }}</td>
                                            <td>{{ $item->paid_date }}</td>
                                            <td>{{ $item->amount }}</td>
                                            <td>
                                                <a href="{{ url('/payments/' . $item->id) }}" title="View payments"><button
                                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/payments/' . $item->id . '/edit') }}"
                                                    title="Edit courses"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Edit</button></a>

                                                <form method="POST" action="{{ url('/payments' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete payments"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                                <a href="{{ url('report/' . $item->id) }}" title="Print Report">
                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="fa fa-print" aria-hidden="true"></i> PRINT
                                                    </button>
                                                </a>


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
