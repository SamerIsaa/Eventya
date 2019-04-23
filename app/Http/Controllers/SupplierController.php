<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::select('name', 'rate' ,'photo_path')->paginate(10);
        return view('users.suppliers' , compact('suppliers') );
    }
}
