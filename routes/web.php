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

Route::get('/products',[productcontroller::class,'index']  );
Route::get('/products/create',[productcontroller::class,'create']  );
Route::post('/products/create',[productcontroller::class,'store']  );
Route::get('/products/{id}/edit',[productcontroller::class,'edit']  );
Route::put('/products/{id}',[productcontroller::class,'update']  );
Route::delete('/products/{id}', [productcontroller::class,'destroy']  );

