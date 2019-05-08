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
        Route::get('lastProducts' , 'ProductController@last')->name('lastProducts');
//        /**
//        * Web Contact US Page And Form
//        */
//        Route::get('contact-us' , 'ContactUs@index');
//        Route::post('contact-us' , 'ContactUs@store');


        Route::get('login' , 'UserAuthController@showlogin')->name('user.login');
        Route::post('login' , 'UserAuthController@loginUser')->name('user.postLogin');
        Route::get('register' , 'UserAuthController@showSignIn')->name('user.signin');
        Route::post('register-payer' , 'UserAuthController@registerPayer')->name('register.payer');
        Route::post('register-supplier' , 'UserAuthController@registerSupplier')->name('register.supplier');
        Route::get('supplier-register' , 'UserAuthController@showSupplierSignIn')->name('user.supplierSignin');

        Route::get('forget' , 'UserAuthController@showForgetPage')->name('user.forget');
        Route::post('forget' , 'UserAuthController@sendResetCode')->name('user.sendResetCode');
        Route::get('code/{user}' , 'UserAuthController@showEnterCodeForm')->name('user.enterCode');
        Route::post('code' , 'UserAuthController@testCode')->name('user.testCode');
        Route::get('reset/password/{email}' , 'UserAuthController@ShowResetPasswordForm')->name('user.showResetPassword');
        Route::post('reset/password' , 'UserAuthController@resetPassword')->name('user.resetPassword');


        Route::group(['middleware' => 'userAuth'] , function (){

            Route::get('logout' , 'UserAuthController@logout')->name('user.logout');


            /*
             * Start Supplier Route Group
             * */
            Route::get('supplier', function (){
                return redirect()->route('supplier.index');
            });
            Route::middleware('supplierAuth')->prefix('supplier')->group( function (){

                Route::get('index' , 'SupplierController@supplierIndex')->name('supplier.index');
                Route::post('product/images' , 'ProductImageController@store')->name('productImages');
                Route::resource('product' , 'ProductController');
                Route::get('offer' , 'ProductController@createOffer')->name('product.addOffer');
                Route::post('offer' , 'ProductController@storeOffer')->name('product.storeOffer');
                Route::get('offer/{id}/edit' , 'ProductController@editOffer')->name('product.editOffer');
                Route::put('offer/{id}' , 'ProductController@updateOffer')->name('product.updateOffer');


                Route::get('new-orders' , 'OrderController@newOrders')->name('newOrders');
                Route::get('reservation-orders' , 'OrderController@reservationOrders')->name('reservationOrders');
                Route::get('ended-orders' , 'OrderController@endedOrders')->name('endedOrders');
                Route::get('order/{id}/accept' , 'OrderController@accept')->name('order.accept');
                Route::get('order/{id}/reject' , 'OrderController@reject')->name('order.reject');
                Route::get('debug' , function (){
                    $supplier = auth()->guard('supplier')->user();
                    dd(\App\Supplier::find($supplier->id)->city);
                });




            });


            /*
             * End Supplier Route Group
             * */


            /*
             * Start Payer Route Group
             * */

            Route::group(['middleware' => 'payerAuth'] , function (){



            });


            /*
             * End Payer Route Group
             * */

        });




    });
?>