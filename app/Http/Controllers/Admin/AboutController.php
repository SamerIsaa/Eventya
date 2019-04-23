<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class AboutController extends Controller
{
    public function showContactPage()
    {
        $contact = About::select('email' , 'phone' , 'google_plus' , 'twitter' , 'facebook')->first();

        return view('dashboard.aboutUs.contact' , compact('contact'));
    }

    public function updateContact(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data,[
            'email'     => 'email|nullable',
            'phone'     => 'numeric|nullable',
            'google_plus'    => 'active_url|nullable',
            'twitter'   => 'active_url|nullable',
            'facebook'  => 'active_url|nullable',
        ]);


        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        if (!($about = About::first())){
            About::create($data);
        }else{
            $about->update($data);
        }


        session()->flash('success' , 'تم الحفظ بنجاح');
        return redirect()->back();
    }


    public function showAboutUsPage()
    {
        $aboutUs = About::select('about_us_ar' , 'about_us_en')->first();
        return view('dashboard.aboutUs.aboutUs' , compact('aboutUs'));

    }

    public function updateAboutUs(Request $request)
    {
        $data = $request->all();


        if (!($about = About::first())){
            About::create($data);
        }else{
            $about->update($data);
        }

        session()->flash('success' , 'تم الحفظ بنجاح');
        return redirect()->back();
    }

    public function showOurMessagePage()
    {
        $ourMessage = About::select('our_message_ar' , 'our_message_en')->first();
        return view('dashboard.aboutUs.ourMessage' , compact('ourMessage'));
    }

    public function updateOurMessage(Request $request)
    {
        $data = $request->all();

        if (!($about = About::first())){
            About::create($data);
        }else{
            $about->update($data);
        }

        session()->flash('success' , 'تم الحفظ بنجاح');
        return redirect()->back();
    }

    public function showpolicesPage()
    {
        $polices = About::select('polices_ar' , 'polices_en')->first();
        return view('dashboard.aboutUs.polices' , compact('polices'));
    }

    public function updatepolices(Request $request)
    {
        $data = $request->all();

        if (!($about = About::first())){
            About::create($data);
        }else{
            $about->update($data);
        }

        session()->flash('success' , 'تم الحفظ بنجاح');
        return redirect()->back();
    }


    public function showLocationPage()
    {
        $location = About::select('latitude' , 'langitude' , 'address', 'address_en')->first();
        return view('dashboard.aboutUs.location' , compact('location'));

    }

    public function updateLocation(Request $request)
    {
        $data = $request->all();

        if (!($about = About::first())){
            About::create($data);
        }else{
            $about->update($data);
        }

        session()->flash('success' , 'تم الحفظ بنجاح');
        return redirect()->back();
    }
}
