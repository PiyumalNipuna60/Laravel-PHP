<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PagesControllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',function(){
return view('home-page');
});


// Route::get('/customer',function(){
//     return view('customer-Page');
//     });


    Route::get('/item',function(){
        return view('item-Page');
        });

      //   Route::get('/home', 'CustomerController@indexHome');

         Route::get('/customer', [PagesControllers::class,'indexCustomer'])->name('indexCustomer');
        // Route::get('/customer', [PagesControllers::class,'indexCustomer'])->name('indexCustomer');
        
        // Route::get('/item', 'PagesControllers@indexItem');