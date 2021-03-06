<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view("login");
});

Route::post('/login', function (\Illuminate\Http\Request $request) {
//    dd($request);
    if ($request->username == 'admin' && $request->password == 'admin') {
        return view('welcome_admin');
    }
    return view('login_error');
});



Route::get('/product', function () {
    return view('product');
});

Route::post('/product', function (\Illuminate\Http\Request $request) {
//    dd($request);
//    $discount_amount = $price * $discount * 0.01;
    $price = $request->price;
    $discount = $request->discount;
    $discount_amount = $price * $discount * 0.01;

    return view('show_discount_amount', compact(['price','discount','discount_amount']));
});




Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::post('/dictionary', function (\Illuminate\Http\Request $request) {
    switch ($request->name) {
        case "dog":
            echo "chó";
            break;
        case "cat":
            echo "mèo";
            break;
        case "chicken":
            echo "gà";
            break;
        default:
            echo "Chưa có từ này trong từ điển";
    }
});
