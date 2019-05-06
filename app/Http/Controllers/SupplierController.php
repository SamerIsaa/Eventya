<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SupplierController extends Controller
{

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
                                        <a class='dropdown-item' href='".  route('dashboard.supplier.show' ,$model->id ) . "'><i class='flaticon-info'></i>تفاصيل</a>"
                                        .($model->is_aproved == 0 ? "<a class='dropdown-item approved' href='' data-id='$model->id' ><i class='fa fa-thumbs-up'></i>قبول المورد</a>":"").
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
            'is_aproved' => $request['is_aproved'],
        ]);
    }


    public function supplierIndex()
    {
        $supplier = Supplier::with(['orders' , 'city'])->find(auth('supplier')->id());
        $products = $supplier->products()->paginate(12);

        return view('users.suppliers.index' , compact(['supplier' , 'products']));

    }
}