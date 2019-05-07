<?php

namespace App\Http\Controllers;

use App\Catagory;
use App\OrderStatus;
use App\Product;
use App\ProductImage;
use App\Supplier;
use Illuminate\Http\Request;
use Validator;
class ProductController extends Controller
{


    public function last()
    {
        $products = Product::with('supplier')->with('catagory')->with('productImages')->where('is_offer' , 0)->paginate(12);
        $suppliers = Supplier::all();

        return view('users.lastProducts' , compact(['products' , 'suppliers']));
    }

    public function create()
    {
        $product = new Product();
        $supplier = Supplier::find(auth('supplier')->id())->products()->save($product);
        $supplier->save();

        $catagories = Catagory::all();
        return view('users.suppliers.products.addProduct' , compact(['catagories' , 'product']));
    }

    public function index()
    {

    }

    public function store(Request $request)
    {
        $data = $request->all();

        $niceNames = array();
        if (app()->isLocale( 'ar' )) {
            $niceNames = [
                'id'                => 'المنتج',
                'name'              => 'اسم المنتج',
                'catagory_id'       => 'التصنيف',
                'price_per_hour'    => 'السعر',
                'condition'         => 'الشروط'
            ];
        }

        $validator = Validator::make($data , [
           'id' => 'required|exists:products,id',
           'name' => 'required',
           'catagory_id' => 'required|exists:catagories,id',
           'price_per_hour' => 'required|numeric',
           'condition' => 'required',
        ]);
        $validator->setAttributeNames($niceNames);


        if ($validator->fails()){
            Product::destroy($data['id']);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product = Product::find($data['id']);

        $product->name = $data['name'];
        $product->catagory_id = $data['catagory_id'];
        $product->price_per_hour = $data['price_per_hour'];
        $product->condition = $data['condition'];

        $product->save();

        return redirect(route('supplier.index'));


    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $product = Product::find($id);
        $catagories = Catagory::all();

        return view('users.suppliers.products.editProduct' , compact(['product' , 'catagories']));
    }

    public function update( $id , Request $request)
    {
        $data = $request->all();

        $niceNames = array();
        if (app()->isLocale( 'ar' )) {
            $niceNames = [
                'name'              => 'اسم المنتج',
                'catagory_id'       => 'التصنيف',
                'price_per_hour'    => 'السعر',
                'condition'         => 'الشروط'
            ];
        }

        $validator = Validator::make($data , [
            'name' => 'required',
            'catagory_id' => 'required|exists:catagories,id',
            'price_per_hour' => 'required|numeric',
            'condition' => 'required',
        ]);
        $validator->setAttributeNames($niceNames);


        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try{
            $product = Product::find($id);

            $product->name = $data['name'];
            $product->catagory_id = $data['catagory_id'];
            $product->price_per_hour = $data['price_per_hour'];
            $product->condition = $data['condition'];

            $product->save();

        }catch (\Exception $e){

        }
        return redirect(route('supplier.index'));
    }

    public function destroy($id)
    {

    }

    public function createOffer()
    {
        $product = new Product();
        $product->is_offer = 1;
        $supplier = Supplier::find(auth('supplier')->id())->products()->save($product);
        $supplier->save();

        $catagories = Catagory::all();
        return view('users.suppliers.products.addOffer' , compact(['catagories' , 'product']));
    }

    public function storeOffer(Request $request)
    {
        $data = $request->all();

        $niceNames = array();
        if (app()->isLocale( 'ar' )) {
            $niceNames = [
                'id'                    => 'المنتج',
                'name'                  => 'اسم المنتج',
                'catagory_id'           => 'التصنيف',
                'offer_price_per_hour'  => 'السعر',
                'condition'             => 'الشروط'
            ];
        }

        $validator = Validator::make($data , [
            'id' => 'required|exists:products,id',
            'name' => 'required',
            'catagory_id' => 'required|exists:catagories,id',
            'offer_price_per_hour' => 'required|numeric',
            'condition' => 'required',

        ]);
        $validator->setAttributeNames($niceNames);


        if ($validator->fails()){
            Product::destroy($data['id']);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product = Product::find($data['id']);

        $product->name = $data['name'];
        $product->catagory_id = $data['catagory_id'];
        $product->offer_price_per_hour = $data['offer_price_per_hour'];
        $product->condition = $data['condition'];

        $product->save();

        return redirect(route('supplier.index'));


    }

    public function editOffer($id)
    {
        $product = Product::find($id);
        $catagories = Catagory::all();

        return view('users.suppliers.products.editOffer' , compact(['product', 'catagories']));

    }

    public function updateOffer($id , Request $request)
    {
        $data = $request->all();

        $niceNames = array();
        if (app()->isLocale( 'ar' )) {
            $niceNames = [
                'name'                  => 'اسم المنتج',
                'catagory_id'           => 'التصنيف',
                'offer_price_per_hour'  => 'السعر',
                'condition'             => 'الشروط'
            ];
        }

        $validator = Validator::make($data , [
            'name' => 'required',
            'catagory_id' => 'required|exists:catagories,id',
            'offer_price_per_hour' => 'required|numeric',
            'condition' => 'required',

        ]);
        $validator->setAttributeNames($niceNames);


        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try{
            $product = Product::find($id);

            $product->name = $data['name'];
            $product->catagory_id = $data['catagory_id'];
            $product->offer_price_per_hour = $data['offer_price_per_hour'];
            $product->condition = $data['condition'];

            $product->save();

        }catch (\Exception $e){

        }
        return redirect(route('supplier.index'));

    }
}
