<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class CityController extends Controller
{
    public function index(){
        $cities = City::paginate(10);
        return view('dashboard.cities.index' , compact('cities'));
    }

    public function create()
    {
        return view('dashboard.cities.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name_ar' => 'required',
            'name_en' => 'required'
        ], [
            'name_ar.required' => 'الأسم باللغة العربية مطلوب',
            'name_en.required' => 'الأسم باللغة الانجليزية مطلوب',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        City::create($data);
        session()->flash('success' , 'تمت عملية الإضافة بنجاح');
        return redirect(route('cities.index'));
    }

    public function destroy($id)
    {
        try{
            City::findOrFail($id)->delete();

            session()->flash('success' , 'تمت عملية الحذف بنجاح');
            return redirect(route('cities.index'));

        }catch (\Exception $e){
            session()->flash('error' , 'لقد حدث خطأ ما ');
            return redirect(route('cities.index'));

        }
    }
}
