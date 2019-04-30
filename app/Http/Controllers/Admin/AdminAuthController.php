<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class AdminAuthController extends Controller
{


    public function showLoginForm()
    {
        return view('dashboard.Auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $data = $request->all();

        $validator = Validator::make($data , [
            'email' => 'required|email',
            'password'  => 'required|min:6',
        ]);

        if ($validator->fails()){
            return redirect(route('admin.showLogin'))->withErrors($validator);
        }

        if (Auth::guard('admin')->attempt($credentials)){
            return redirect()->intended(route('admin.dashboard'));
        }else{
            session()->flash('credentials' , trans('messages.credentialsError'));
            return redirect(route('admin.showLogin'));
        }

    }

    public function register(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data , [
            'name' => 'required',
            'email' => 'required|email|unique:suppliers,email|unique:payers,email|unique:admins,email',
            'password'  => 'required|min:6|confirmed',
            'agree'     => 'accepted'
        ]);

        if ($validator->fails()){
            return redirect(route('admin.showLogin'))->withErrors($validator);
        }
        $data['password'] = Hash::make($data['password']);
        Admin::create($data);
        $credentials = $request->only('email','password');

        if (Auth::guard('admin')->attempt($credentials)){
            return redirect()->intended(route('admin.dashboard'));
        }else{
            return redirect('admin.showLogin');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('admin.showLogin'));
    }
}
