<?php

use App\Models\Categorie;
use App\Models\Info;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    Route::resource('info', App\http\controllers\infoController::class);
    Route::resource('product', App\http\controllers\productController::class);
    Route::resource('categorie', App\http\controllers\categorieController::class);
    Route::resource('account', App\http\controllers\userController::class);
    Route::get('user/main',function(){
        $cats = Categorie::all();
        
        //$prods = Product::with('categorie')->get();
        $prods = Product::with('categorie')->get();
        foreach($prods as $pro){
            echo ($pro->name).'<br/>';
            return dd($pro->categorie());
        }
        return view('user.main',compact('cats','prods'));
    });
});
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');