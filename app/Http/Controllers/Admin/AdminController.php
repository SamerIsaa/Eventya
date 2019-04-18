<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class AdminController extends Controller
{

    public function index(){
        $admins = Admin::paginate(15);
        return view('dashboard.admins.index' , compact('admins'));
    }

    public function create()
    {
        return view('dashboard.admins.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data , [
            'name'   => 'required',
            'email' => 'required|email|unique:suppliers,email|unique:payers,email|unique:admins,email',
            'password'   => 'required|min:6'
        ], [
            'name.required'  => 'الاسم مطلوب',
            'email.required'  => 'البريد الإلكتروني مطلوب',
            'email.unique'  => 'هذا البريد الإلكتروني مستخدم لحساب اخر',
            'password.required'  => 'يرجى ادخال كلمة المرور',
            'password.min'  => 'كلمة المرور يجب ان تتكون على الاقل من 6 ارقام وحروف'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data['password'] = Hash::make($data['password']);
        Admin::create($data);

        session()->flash('success' , 'تمت عملية الإضافة بنجاح');
        return redirect(route('admins.index'));


    }

    public function edit($id)
    {

    }

    public function update(Request $request , $id)
    {

    }

    public function destroy($id)
    {
        try{
            $admin = Admin::findOrFail($id);
            $admin->delete();
            session()->flash('success' , 'تم حذف المدير ' .$admin->name . ' بنجاح');
            return redirect()->route('admins.index');

        }catch (\Exception $e){
            session()->flash('error' , 'لقد حدث خطأ ما , هذا المدير غير موجود');
            return redirect()->route('admins.index');
        }
    }
}
