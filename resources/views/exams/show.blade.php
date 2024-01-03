@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">Payment Page</div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-6">
                <h5 class="card-title">Enrollment_No: {{ $item->enrollement->enroll_no }}</h5>
                <p class="card-text">paid_date : {{ $payments->paid_date }}</p>
                <p class="card-text">amount: {{ $payments->amount }}</p>
            </div>
        </div>

    </div>
    <!-- Remove the unnecessary </hr> tag and the duplicate card-body div -->

</div>

@endsection
