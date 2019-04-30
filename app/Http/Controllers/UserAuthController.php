<?php

namespace App\Http\Controllers;

use App\City;
use App\Mail\VerifyResetPassword;
use App\Payer;
use App\ResetCode;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Validator;
class UserAuthController extends Controller
{
    public function showlogin()
    {
        return view('users.auth.login');
    }

    public function loginUser(Request $request)
    {
        $data = $request->all();

        $niceNames = array();
        if (app()->isLocale( 'ar' )) {
            $niceNames = [
                'email' => 'البريد الالكتروني',
                'password' => 'كلمة المرور',
            ];
        }

        $validator = Validator::make($data , [
            'password'  => 'required|min:6',
            'email'     => 'required|email',
        ]);
        $validator->setAttributeNames($niceNames);


        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $credentials = $request->only('email', 'password');

        if (Payer::where('email' , $data['email'])->first() != null){
            if (Auth::guard('payer')->attempt($credentials)){
                return redirect()->intended(route('index'));
            }else{
                session()->flash('credentials' , trans('messages.credentialsError'));
                return redirect()->back();
            }
        }elseif (Supplier::where('email' , $data['email'])->first() != null){
            if (Auth::guard('supplier')->attempt($credentials)){
                return redirect()->intended(route('index'));
            }else{
                session()->flash('credentials' , trans('messages.credentialsError'));
                return redirect()->back();
            }
        }else{
            session()->flash('notFound' , trans('messages.notFoundEmail'));
            return redirect()->back();
        }




    }

    public function showSignIn()
    {
        $cities = City::all();
        return view('users.auth.signInPayer' , compact('cities'));
    }

    public function registerPayer(Request $request)
    {
        $data = $request->all();

        $niceNames = array();
        if (\App::getLocale() == 'ar') {
            $niceNames = [
                'email' => 'البريد الالكتروني',
                'password' => 'كلمة المرور',
                'name' => 'الاسم',
                'phone' => 'رقم الهاتف',
                'address' => 'العنوان',
            ];
        }

        $validator = Validator::make($data , [
            'name'  => 'required',
            'email'     => 'required|email|unique:payers,email|unique:suppliers,email|unique:admins,email',
            'password'  => 'required|min:6',
            'phone'     => 'required|numeric',
            'address'          => 'required'
        ]);
        $validator->setAttributeNames($niceNames);


        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['password'] = Hash::make($data['password']);
        Payer::create($data);
        $credentials = $request->only('email', 'password');

        if (Auth::guard('payer')->attempt($credentials)){
            return redirect()->intended(route('index'));
        }else{
            return redirect(route('user.signin'));
        }

    }

    public function showSupplierSignIn()
    {
        $cities = City::all();
        return view('users.auth.signInSupplier' , compact('cities'));
    }

    public function registerSupplier(Request $request)
    {
        $data = $request->all();

        $niceNames = array();
        if (app()->getLocale() == 'ar') {
            $niceNames = [
                'email' => 'البريد الالكتروني',
                'password' => 'كلمة المرور',
                'name' => 'الاسم',
                'phone' => 'رقم الهاتف',
                'address' => 'العنوان',
                'city'    => 'المدينة'
            ];
        }

        $validator = Validator::make($data , [
            'name'  => 'required',
            'email'     => 'required|email|unique:payers,email|unique:suppliers,email|unique:admins,email',
            'password'  => 'required|min:6',
            'phone'     => 'required|numeric',
            'address'   => 'required',
            'city'      => 'required|exists:cities,id'
        ]);
        $validator->setAttributeNames($niceNames);


        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['password'] = Hash::make($data['password']);

        $city = City::find($data['city']);
        $supplier = Supplier::create($data);
        $supplier->city()->associate($city);
        $supplier->save();


        $credentials = $request->only('email', 'password');

        if (Auth::guard('supplier')->attempt($credentials)){
            return redirect()->intended(route('index'));
        }else{
            return redirect(route('user.supplierSignin'));
        }

    }


    public function logout()
    {
        if(auth()->guard('payer')->user()){
            auth()->guard('payer')->logout();
        }elseif (auth()->guard('supplier')->user()){
            auth()->guard('supplier')->logout();
        }
        return redirect(route('index'));
    }

    public function showForgetPage()
    {
        return view('users.auth.forget');
    }

    public function sendResetCode(Request $request)
    {
        $data = $request->all();

        $niceNames = array();
        if (app()->getLocale() == 'ar') {
            $niceNames = [
                'email' => 'البريد الالكتروني',
            ];
        }

        $validator = Validator::make($data , [
            'email'     => 'required|email',
        ]);
        $validator->setAttributeNames($niceNames);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }


        if ($user = Payer::whereEmail($data['email'])->first()) {
            if ($resetCode = ResetCode::where('email', $data['email'])->first()) {
                $randcode = rand(10000, 50000);
                $resetCode->code = $randcode;
                $resetCode->save();
            } else {
                $resetCode = new ResetCode();
                $resetCode->email = $data['email'];
                $randcode = rand(10000, 50000);
                $resetCode->code = $randcode;
                $resetCode->save();
            }
        } else if ($user = Supplier::whereEmail($data['email'])->first()) {
            $resetCode = ResetCode::where('email', $data['email'])->first();
            if ($resetCode) {
                $randcode = rand(10000, 50000);
                $resetCode->code = $randcode;
                $resetCode->save();
            } else {
                $resetCode = new ResetCode();
                $resetCode->email = $data['email'];
                $randcode = rand(10000, 50000);
                $resetCode->code = $randcode;
                $resetCode->save();
            }
        }else{
            return redirect()->back();
        }


        Mail::to($user)->send(new VerifyResetPassword($resetCode, $user));
        return redirect()->route('user.enterCode' , $user->email);
    }

    public function showEnterCodeForm($email)
    {

        return view('users.auth.code' , compact('email'));
    }

    public function testCode(Request $request)
    {
        $data = $request->all();

        $niceNames = array();
        if (app()->getLocale() == 'ar') {
            $niceNames = [
                'code' => 'رمز التحقق',
                'email' => 'البريد الإلكتروني'
            ];
        }

        $validator = Validator::make($data , [
            'email' => 'required|email',
            'code'     => 'required|digits:5',
        ]);
        $validator->setAttributeNames($niceNames);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $resetCode = ResetCode::where('email', $data['email'])->first();
        if ($resetCode->code == $data['code']){
            return redirect(route('user.showResetPassword' , $data['email']));
        }else{
            session()->flash('invalidCode' , trans('translation.invalidCode'));
        }
    }

    public function ShowResetPasswordForm($email)
    {
        return view('users.auth.resetPassword' , compact('email'));
    }

    public function resetPassword(Request $request)
    {
        $data = $request->all();

        $niceNames = array();
        if (app()->getLocale() == 'ar') {
            $niceNames = [
                'email' => 'البريد الإلكتروني',
                'password' => 'كلمة المرور',
            ];
        }

        $validator = Validator::make($data , [
            'email' => 'required|email',
            'password'     => 'required|min:6',
        ]);
        $validator->setAttributeNames($niceNames);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $password = Hash::make($data['password']);
        $credentials = $request->only('email', 'password');

        if ($user = Payer::whereEmail($data['email'])->first()) {
            $user->password = $password;
            $user->save();

            if (Auth::guard('payer')->attempt($credentials)){
                return redirect()->intended(route('index'));
            }
        } else if ($user = Supplier::whereEmail($data['email'])->first()) {
            $user->password = $password;
            $user->save();
            if (Auth::guard('supplier')->attempt($credentials)){
                return redirect()->intended(route('index'));
            }
        }else{
            return redirect()->back();
        }


        if (Payer::where('email' , $data['email'])->first() != null){

        }elseif (Supplier::where('email' , $data['email'])->first() != null){

        }else{
            session()->flash('notFound' , trans('messages.notFoundEmail'));
            return redirect()->back();
        }


        return redirect(route('user.login'));

    }
}
