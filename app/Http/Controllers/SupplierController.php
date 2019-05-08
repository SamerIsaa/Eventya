<?php

namespace App\Http\Controllers;

use App\Supplier;
use App\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SupplierController extends Controller
{

    public function index(){
        return view('dashboard.supplier.index');
    }

    public function datatable(){
        $supplier = Supplier::with('city')->get();
        return DataTables::of($supplier)
         ->editColumn('is_aproved', function($model) {
            if($model->is_aproved == 1){
                return 'مقبول';
            }else{
                return 'غير مقبول';
            }
        })
        ->editColumn('Actions',function ($model){
                return "<span class='dropdown center-block'>
                                <a href='#' class='btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill' data-toggle='dropdown' aria-expanded='true'>
                                     <i class='flaticon-signs-1'></i>
                                </a>
                                <div class='dropdown-menu dropdown-menu-right'>
                                        <a class='dropdown-item' href='/admin/supplier/$model->id'><i class='flaticon-search-1'></i>تفاصيل</a>"
                                        .($model->is_aproved == 0 ? "<a class='dropdown-item approved' href='' data-id='$model->id' ><i class='flaticon-search-1'></i>قبول المورد</a>":
                                        "<a class='dropdown-item' href='/admin/supplier/$model->id/products' ><i class='flaticon-search-1'></i>منتجات المورد</a>").
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

    public function products(){
        return view('dashboard.supplier.products');
    }

    public function supplierProduct($id){
        $product = Product::with('catagory')->where('supplier_id',$id)->get();
        return DataTables::of($product)
        ->editColumn('is_offer', function($model) {
            if($model->is_offer == 1){
                return 'عرض';
            }else{
                return 'خارج العرض';
            }
        })
       ->editColumn('Actions',function ($model){
               return "<span class='dropdown center-block'>
                               <a href='#' class='btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill' data-toggle='dropdown' aria-expanded='true'>
                                    <i class='flaticon-signs-1'></i>
                               </a>
                               <div class='dropdown-menu dropdown-menu-right'>
                                       <a class='dropdown-item' href='/admin/product/$model->id'><i class='flaticon-search-1'></i>تفاصيل</a>
                               </div>
                       </span>";
           })
           ->rawColumns(['Actions'])
           ->make(true);
    }

}
