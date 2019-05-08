<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login' , 'Admin\AdminAuthController@showLoginForm')->name('admin.showLogin');
Route::post('login' , 'Admin\AdminAuthController@login')->name('admin.login');
Route::post('register' , 'Admin\AdminAuthController@register')->name('admin.register');

Route::group(['middleware' => 'auth:admin'] , function (){

    Route::get('/', function () {
        return view('dashboard.index');
    })->name('admin.dashboard');

    Route::get('admin/logout' , 'Admin\AdminAuthController@logout' )->name('admin.logout');

    Route::get('about/contact' , 'Admin\AboutController@showContactPage')->name('about.contact');
    Route::post('about/contact' , 'Admin\AboutController@updateContact')->name('about.contact.update');

    Route::get('about/about-us' , 'Admin\AboutController@showAboutUsPage')->name('about.aboutUs');
    Route::post('about/about-us' , 'Admin\AboutController@updateAboutUs')->name('about.aboutUs.update');

    Route::get('about/our-message' , 'Admin\AboutController@showOurMessagePage')->name('about.OurMessage');
    Route::post('about/our-message' , 'Admin\AboutController@updateOurMessage')->name('about.OurMessage.update');

    Route::get('about/polices' , 'Admin\AboutController@showpolicesPage')->name('about.polices');
    Route::post('about/polices' , 'Admin\AboutController@updatepolices')->name('about.polices.update');

    Route::get('about/location' , 'Admin\AboutController@showLocationPage')->name('about.location');
    Route::post('about/location' , 'Admin\AboutController@updateLocation')->name('about.location.update');

    Route::prefix('/supplier')->group(function () {
        Route::get('/', 'SupplierController@index')->name('dashboard.supplier.index');
        Route::get('/datatable', 'SupplierController@datatable');
        Route::get('/{id}', 'SupplierController@show');
        Route::get('/{id}/products', 'SupplierController@products');
        Route::get('/supplierProduct/{id}', 'SupplierController@supplierProduct');
        Route::post('/delete', 'SupplierController@destroy');
        Route::post('/approved', 'SupplierController@approve');
    });

    Route::resource('admins' , 'Admin\AdminController')->except([
       'show' ,'destroy'
    ]);
    Route::get('admins/{id}/delete' , 'Admin\AdminController@destroy')->name('admins.destroy');


    Route::resource('catagories' , 'Admin\CatagoryController')->except([
        'show' ,'destroy'
    ]);
//    Route::get('catagories/{id}/delete' , 'Admin\AdminController@destroy')->name('admins.destroy');
    Route::post('catagory/upload' , 'Admin\CatagoryController@upload')->name('catagories.uploadPhoto');

    Route::resource('cities' , 'Admin\CityController')->except([
        'show' ,'destroy'
    ]);
    Route::get('cities/{id}/delete' , 'Admin\CityController@destroy')->name('cities.destroy');
    Route::get('products' , 'ProductController@index')->name('products.index');
    Route::get('productsData','ProductController@ajaxDatatables')->name('products.data');
});
