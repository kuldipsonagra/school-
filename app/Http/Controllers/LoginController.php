<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Session;
use App\Models\Roll;

use Hash;


class LoginController extends Controller
{
    public function index()
    {

        return view('login');
    }
    public function loginstore(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required|string",
        ]);

        $user = Login::where('email', $request->email)
            ->first();
        if ($user) {
            if ($request->password == $user->password) {
                $request->session()->put('loginid', $user->id);
                return view('home');
            } else {
                return redirect()->back()->with('fail', 'Invalid password');
            }
        } else {
            return redirect()->back()->with('fail', 'Invalid email ');
        }
    }
    public function register()
    {
        return view('register');
    }

    public function registerstore(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "email" => "required|email",
            "password" => "required",
            "cpassword" => "required|same:password", // Fix the field name here
        ]);
        $registration = new Login;
        $registration->name = $request->input('name');
        $registration->email = $request->input('email');
        $registration->password = $request->input('password'); // Hash the password for security
        $registration->retypepassword = $request->input('cpassword'); // Hash the confirm password as well
        $registration->save();

        return redirect('/login');
    }



    public function logoutF()
    {
        if (Session::has('loginid')) {
            Session::pull('loginid');
            return redirect()->route('login');

        }

    }





}
