<?php

namespace App\Http\Controllers\Admin;

use App\Catagory;
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

        $validator = Validator::make($data , [
            'name_ar'   => 'required',
            'name_en'   => 'required',
            'image_path'   => 'required',
        ],[
            'name_ar.required'  => 'الإسم باللغة العربية مطلوب',
            'name_en.required'  => 'الإسم باللغة الإنجليزية مطلوب',
            'image_path.required'  => 'صورة التصنيف مطلوبة',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Catagory::create($data);

        session()->flash('success' , 'تمت عملية الاضافة بنجاح');
        return redirect()->route('catagories.index');


    }


    public function upload(Request $request){
        $filenamewithext = $request['file']->getClientOriginalName();
        $filename = pathinfo($filenamewithext,PATHINFO_FILENAME);
        $extension = $request['file']->getClientOriginalExtension();
        $FileToStore = $filename.'_'.time().'.'.$extension;
        $request['file']->move(public_path().'/images/', $FileToStore);
        return $FileToStore;

    }
}
