<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function registration()
    {
        return view('registration');
    }

    public function main()       
    {
        return view('main'); 
    }
    public function login()
    {
        return view('login');
    }

    public function newsub()
    {
        return view('newsub');
    }
    
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:tutors',
            'phonenum' => 'required',
            'address' => 'required',
            'state' => 'required',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        $check->save();

        return redirect("login")->with('save', 'Success')->withErrors('error', 'Failed');
    }


    public function create(array $data)
    {
        return Tutor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phonenum' => $data['phonenum'],
            'address' => $data['address'],
            'state' => $data['state'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('mainpage')->with('save', 'Success');
        } else {
            return redirect("mainpage")->withErrors('error', 'Failed');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
    
}