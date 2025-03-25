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
Route::get('/detail/{id}', [PageController::class, 'getDetail']);
Route::get('/contact', [PageController::class, 'getContact']);
Route::get('/about', [PageController::class, 'getAbout']);
Route::get('/admin', [PageController::class, 'getIndexAdmin']);
Route::get('/detail/{id}', [PageController::class, 'getDetail'])->name('detail');
Route::get('/admin-add-form', [PageController::class, 'getAdminAdd'])->name('add-product');
Route::post('/admin-add-form', [PageController::class, 'postAdminAdd']);

Route::get('/admin-edit-form/{id}', [PageController::class, 'getAdminEdit']);
Route::post('/admin-edit', [PageController::class, 'postAdminEdit']);

Route::post('/admin-delete/{id}', [PageController::class, 'postAdminDelete']);

Route::get('/admin-export', [PageController::class, 'exportAdminProduct'])->name('export');

use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;

Route::get('/themgiohang/{id}', [CartController::class, 'addToCart'])->name('themgiohang');

// use App\Http\Controllers\CartController;

// Route::get('/themgiohang/{id}', [CartController::class, 'addToCart'])->name('themgiohang');


Route::get('/register', function () {

    return view('users.register');
});
Route::post('/register', [UserController::class, 'Register']);
Route::get('/login', function () {
    return view('users.login');
});




use App\Models\Product;

$products = Product::all();
