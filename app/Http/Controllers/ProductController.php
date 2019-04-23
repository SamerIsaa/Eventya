<?php

namespace App\Http\Controllers;

use App\Catagory;
use App\OrderStatus;
use App\Product;
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
}
