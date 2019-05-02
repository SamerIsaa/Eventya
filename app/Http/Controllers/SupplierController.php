<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SupplierController extends Controller
{
    // public function index()
    // {
    //     $suppliers = Supplier::select('name', 'rate' ,'photo_path')->paginate(12);
    //     return view('users.suppliers' , compact('suppliers') );
    // }

    public function index(){
        return view('dashboard.supplier.index');
    }

    public function datatable(){
        $supplier = Supplier::with(['city'])->get();
        return DataTables::of($supplier)

        ->editColumn('Actions',function ($model){
                return "<span class='dropdown center-block'>
                                <a href='#' class='btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill' data-toggle='dropdown' aria-expanded='true'>
                                     <i class='flaticon-signs-1'></i>
                                </a>
                                <div class='dropdown-menu dropdown-menu-right'>
                                        <a class='dropdown-item' href='/admin/supplier/$model->id'><i class='flaticon-search-1'></i>تفاصيل</a>"
                                        .($model->is_aproved == 0 ? "<a class='dropdown-item approved' href='' data-id='$model->id' ><i class='flaticon-search-1'></i>قبول المورد</a>":"").
                                "</div>
                        </span>";
            })
            ->rawColumns(['Actions'])
            ->make(true);
    }

    public function show($id){
        $supplier = Supplier::with('city')->find($id);
         if($supplier == null){
             return abort(404);
         }else{
             return view('dashboard.supplier.show', compact('supplier'));
         }
     }

    public function approve(Request $request){
        $supplier = Supplier::find($request['id']);
        if ($supplier == null){
            return abort(404);
        }
        $supplier->update([
            'is_aproved' => 1,
        ]);
        // return redirect()->back()->with('success',' تم الحذف بنجاح ');
    }
}