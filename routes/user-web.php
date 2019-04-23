<?php



    Route::post('changeLang', function (Illuminate\Http\Request $request) {
        $locale =  request('locale');
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return url()->previous();
    });


    Route::middleware('setLocale')->group(function () {


        Route::get('/', 'Controller@index')->name('index');
        Route::get('contact-us' , 'AboutController@contactUs')->name('contactEventya');
        Route::get('suppliers' , 'SupplierController@index')->name('servicesSuppliers');
//        /**
//        * Web Contact US Page And Form
//        */
//        Route::get('contact-us' , 'ContactUs@index');
//        Route::post('contact-us' , 'ContactUs@store');
    });
?>