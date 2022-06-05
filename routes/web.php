<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShippingController;
















//======================================HOME PAGE ALL ROUTES CONTROLLER==========================================
//slider page
Route::get('/slider', function () {
    return view('backend.frontend.slider');
})->middleware(['auth'])->name('home-slider');
//store slider
Route::controller(HomePageController::class)->group(function () {
    //store slider
 Route::post('/slider/store', 'StoreSlider')->name('slider-store')->middleware(['auth']);
//delete slider
Route::get('slider/delete/{id}', 'DeleteSlider')->name('delete-slider')->middleware(['auth']);
//why us page
Route::get('/why-us', function () {
    return view('backend.frontend.why-us');
})->middleware(['auth'])->name('why-us');

  //store slider
  Route::post('/why-us/update/{id}', 'UpdateWhyUs')->name('update_why_us')->middleware(['auth']);
//serives page
Route::get('/services', function () {
    return view('backend.frontend.services');
})->middleware(['auth'])->name('service');

  //store services
  Route::post('/services/store', 'ServicesStore')->name('services-store')->middleware(['auth']);
 //view services home page
 Route::get('/services/{id}', 'ServicesView')->name('view-services');
 //delete service
 Route::get('/services/delete/{id}', 'DeleteServices')->name('delete-service')->middleware(['auth']);



//estimate  page
Route::get('/estimate', function () {
    return view('backend.frontend.estimate');
})->middleware(['auth'])->name('estimate');


 //store estimate
 Route::post('/estimate/store', 'EstimateStore')->name('estimate-store')->middleware(['auth']);

 //delete estimate
 Route::get('/estimate/delete/{id}', 'DeleteEstimate')->name('delete-estimate')->middleware(['auth']);

//clients logo  page
Route::get('/clients', function () {
    return view('backend.frontend.clients');
})->middleware(['auth'])->name('clientlogo');

 //store clients logo
 Route::post('/client/store', 'ClientStore')->name('client-store')->middleware(['auth']);

 //delete client
 Route::get('/client/delete/{id}', 'DeleteClient')->name('delete-client')->middleware(['auth']);

 //testy  page
Route::get('/testimonial', function () {
    return view('backend.frontend.testy');
})->middleware(['auth'])->name('testy');

 //store testy
 Route::post('/testimonial/store', 'TestyStore')->name('testy-store')->middleware(['auth']);

 //delete testy
 Route::get('/testimonial/delete/{id}', 'DeleteTesty')->name('delete-testy')->middleware(['auth']);


 //home page service PAGE

  //serives home  page
Route::get('/our-services', function () {
    return view('frontend.our-services');
})->name('our-services');


 //page cat
 Route::get('/pages', function () {
    return view('backend.pages.page');
})->middleware(['auth'])->name('page-cat');


//store page cat
Route::post('/page/store', 'PageCatStore')->name('pagecat-store')->middleware(['auth']);

//delete page cat
Route::get('/page/delete/{id}', 'PageCatDelete')->name('delete-pagecat')->middleware(['auth']);
//edit page cat
Route::get('/page/edit/{id}', 'PageCatEdit')->name('edit-page')->middleware(['auth']);

//update  page
Route::post('/page/update/{id}', 'UpdatePage')->name('update-page')->middleware(['auth']);

//user view page
Route::get('/page/{slug}', 'UserViewPage')->name('page-view');



 //contact page
 Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

 //faq page
 Route::get('/faq', function () {
    return view('backend.frontend.faq');
})->middleware(['auth'])->name('faq');


//store faq
Route::post('/faq/store', 'FaqStore')->name('faq-store')->middleware(['auth']);

//delete faq
Route::get('/faq/delete/{id}', 'FaqDelete')->name('delete-faq')->middleware(['auth']);

 //faq home page
 Route::get('/faqs', function () {
    return view('frontend.faq');
})->name('user-faq');



});

//====================================END HOME PAGE ALL ROUTES CONTROLLER======================================



//==================================SITE SETTINGS ALL ROUTES CONTROLLER================================
Route::controller( SettingsController::class)->group(function () {
//seo page
Route::get('/seo', function () {
    return view('backend.settings.seo');
})->middleware(['auth'])->name('seo');
//site page
Route::get('/site', function () {
    return view('backend.settings.site');
})->middleware(['auth'])->name('site');
//update SITE
Route::post('/site/update/{id}', 'UpdateSite')->middleware(['auth'])->name('update-site');
//update SITE Logo
Route::post('/site/logo/update/{id}', 'UpdateLogo')->middleware(['auth'])->name('update-logo');

//update SEO
Route::post('/seo/update/{id}', 'UpdateSEO')->middleware(['auth'])->name('update-seo');




});

//=============================END SITE SETTINGS ALL ROUTES CONTROLLER================================


//================================ADMIN ALL ROUTES CONTROLLER============================================================
Route::controller(AdminController::class)->group(function () {
    //seo page
    Route::get('/admin/profile', function () {
        return view('admin.profile.profile');
    })->middleware(['auth'])->name('admin-profile');
//update admin profile
Route::post('/admin/update/profile/{id}', 'UpdateAdminProfile')->middleware(['auth'])->name('update-admin-profile');

//update admin password
Route::post('/admin/update/password/{id}', 'UpdateAdminPassword')->middleware(['auth'])->name('update-admin-pwd');
});
//===============================END ADMIN ALL ROUTES CONTROLLER============================================================

//================================ADMIN ADD SHIPPMENT ALL ROUTE CONTROLLER==================================



//==================================EDIT SHIPPINGS  ALL ROUTES CONTROLLER================================
Route::controller( SettingsController::class)->group(function () {
    //edit shipping
    Route::get('/shipping/show/{id}', [ShippingController::class, 'ViewSHipping'])->name('view-shipping')->middleware(['auth']);
    //delete shipping
    Route::get('/shipping/delete/{id}', [ShippingController::class, 'DeleteSHipping'])->name('delete-shippment')->middleware(['auth']);

     //edit shipping status
     Route::get('/shipping/edit/status/{id}', [ShippingController::class, 'EditSHippingStatus'])->name('edit-ship-status')->middleware(['auth']);


 //view shipping label
 Route::get('/shipping/label/{id}', [ShippingController::class, 'LabelSHippingStatus'])->name('view-shipping-label')->middleware(['auth']);

 //view shipping invoice
 Route::get('/shipping/invoice/{id}', [ShippingController::class, 'SHippingInvoice'])->name('invoice-download')->middleware(['auth']);



     //update ship status
    Route::post('/shipping/update/{id}', [ShippingController::class, 'UpdateSHippingStatus'])->name('update-ship-status')->middleware(['auth']);
});
//================================END SHIPPMENT ALL ROUTE CONTROLLER================================















//add shippent page
Route::get('/admin/shippent/label', function () {
    return view('backend.shipping.label');
})->middleware(['auth']);;






//add shippent page
  Route::get('/admin/add/shippent', function () {
    return view('backend.shipping.add_shipping');
})->middleware(['auth'])->name('add-shippment');

 //manage all shippent page
 Route::get('/admin/manage/shippent', function () {
    return view('backend.shipping.all_shipping');
})->middleware(['auth'])->name('all-shippments');




 //track  shippent  home page
 Route::get('/track/shipment', function () {
    return view('frontend.track-shippment');
})->name('track-shippment');
//===============================END ADMIN ALL SHIPPMENT ALL ROUTE CONTROLLER================================



















































Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
