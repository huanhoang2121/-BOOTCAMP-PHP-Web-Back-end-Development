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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/greeting/{name?}', function ($name = null) {

    if ($name) {

        echo 'Hello ' . $name . '!';

    } else {

        echo 'Hello World!';

    }

});
Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }

    return view('login_error');
});


Route::get('/product_discount', function () {
    return view('product_discount');
});
Route::post('/product_discount', function (Illuminate\Http\Request $request) {
    $productDescription = $request->input('description');
    $productPrice = $request->input('price');
    $discountPercent = $request->input('discount_percent') ;
    $discountAmount = $productPrice * $discountPercent * 0.1 / 100;
    $discountPrice = $productPrice - $discountAmount;
    return view('display_discount', compact(['discountPrice', 'discountAmount', 'productDescription', 'productPrice', 'discountPercent']));
});

Route::get('/translate', function () {
    return view('translate');
});
Route::post('/translate', function (Illuminate\Http\Request $request) {
    $english = $request->english;
    $arrtranslate = array(
        "Hello" => "Xin chào",
        "Ok" => "Vâng",
        "Bye" => "Tạm biệt"
    );

    foreach ($arrtranslate as $key => $value) {
        if($english === $key){
            $vietnam = $value;
        }
    }
    return view('display_translate', compact(['english'],['vietnam']));

});
