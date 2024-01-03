<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Enrollment;
class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();

        return view('payments.index')->with('payments', $payments);
    }

    public function create()
    {
        $enrollments = Enrollment::pluck('enroll_no', 'id');

        return view('payments.create', compact('enrollments'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $enrollments= Payment::create($input);

        return redirect()->route('payments.index')->with('success', 'Payment added!');
    }


    public function show($id)
    {
        $payment = Payment::find($id);
        return view('payments.show')->with('payment', $payment);
    }

    public function edit($id)
{
    $payment = Payment::find($id);
    $enrollments = Enrollment::all(); // Assuming you have an Enrollment model
    return view('payments.edit', compact('payment', 'enrollments'));
}


    public function update(Request $request, $id)
    {
        $request->validate([
            'enrollment_id' => 'required',
            'paid_date' => 'required',
            'amount' => 'required',
        ]);

        $payments = Payment::find($id);
        $input = $request->only('enrollment_id', 'paid_date', 'amount');
        $payments->update($input);

        return redirect()->route('payments.index')->with('success', 'Payment updated!');
    }

    public function destroy($id)
    {
        Payment::destroy($id);
        return redirect()->route('payments.index')->with('danger', 'Payment deleted!');
    }
}
