<?php

namespace App\Http\Controllers;

use App\Catagory;
use App\OrderStatus;
use App\Product;
use App\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $catagories = Catagory::all();
        $status = OrderStatus::all();
        return view('dashboard.products.index', compact(['catagories' , 'products' , 'status']));
    }

    public function ajaxDatatables(){
        $query = Product::select('catagory_id', 'supplier_id', 'name', 'price_per_hours', 'offer_price_per_hours', 'is_offer', 'currency','tax');
        return datatables($query)->make(true);
    }

    public function last()
    {
        $products = Product::with('supplier')->with('catagory')->with('productImages')->where('is_offer' , 0)->paginate(12);
        $suppliers = Supplier::all();

        return view('users.lastProducts' , compact(['products' , 'suppliers']));
    }
}
