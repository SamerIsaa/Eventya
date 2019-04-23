<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function contactUs()
    {
        $about = About::select('address','address_en','phone','email')->first();
        return view('users.contactUs' , compact('about'));

    }
}
