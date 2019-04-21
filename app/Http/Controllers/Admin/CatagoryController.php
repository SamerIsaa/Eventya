<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class CatagoryController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('dashboard.catagories.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();
dd($request);
        $validator = Validator::make($data , [
            'name_ar'   => 'required',
            'name_en'   => 'required',
            'image'   => 'required|image',
        ],[
            'name_ar.required'  => 'الإسم باللغة العربية مطلوب',
            'name_en.required'  => 'الإسم باللغة الإنجليزية مطلوب',
            'image.required'  => 'صورة التصنيف مطلوبة',
            'image.image'  => 'يجب ان يكون الملف المرفق صورة',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

//        if ($image = $request->file('image'))

    }
}
