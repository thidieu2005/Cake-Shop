<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



//Banhang routesroutes
// use App\Models\Customer;
// use App\Models\Bill;
// use App\Models\BillDetails;
// use App\Models\News;
// use App\Models\Product;
// use App\Models\Slide;
// use App\Models\TypeProduct;
// use App\Models\User;

// Route::get('/sellPro', function () {
//     Customer::createTable();
//     Bill::createTable();
//     BillDetails::createTable();
//     News::createTable();
//     Product::createTable();
//     Slide::createTable();
//     TypeProduct::createTable();
//     User::createTable(); 

//     return "Tất cả bảng đã được tạo thành công!";
// });

use App\Http\Controllers\PageController;

Route::get('/trangchu', [PageController::class, 'getIndex']);
Route::get('/type-product/{type}', [PageController::class, 'getLoaiSp'])->name('type-product');
Route::get('/adminForm', [PageController::class, 'getAdminForm']);
Route::get()

// use App\Http\Controllers\CartController;

// Route::get('/themgiohang/{id}', [CartController::class, 'addToCart'])->name('themgiohang');





use App\Models\Product;

$products = Product::all();
