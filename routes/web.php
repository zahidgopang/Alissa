<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\Products;

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

Route::get('Admin/Add-Products', function () {
    return view('Admin/Add-Product');
});

Route::get('Admin/All-Products',  [Products::class, 'index']);
Route::get('Admin/Messages',  [GeneralController::class, 'message']);

Route::get('/', [GeneralController::class, 'index']);

Route::get('home',  [GeneralController::class, 'index']);

Route::get('allproducts',  [Products::class, 'allproducts']);

Route::get('products/Category/{id}',  [Products::class, 'productsbycat']);

Route::get('products/Subcategory/{id}',  [Products::class, 'productsbysub']);

Route::get('products/detail/{id}',  [Products::class, 'productsdetail']);

Route::get('why-us',  [GeneralController::class, 'whyus']);

Route::get('solution',  [GeneralController::class, 'solution']);

Route::get('about-us',  [GeneralController::class, 'aboutus']);

Route::get('faq',  [GeneralController::class, 'faq']);

Route::get('contact-us',  [GeneralController::class, 'contactus']);

Route::get('news',  [GeneralController::class, 'news']);

Route::get('post',  [GeneralController::class, 'post']);


Route::post('Productstore',  [Products::class, 'store']);

Route::post('Productupdate',  [Products::class, 'update']);


Route::get('Edit-Product/{id}',  [Products::class, 'Edit']);

Route::get('Delete-Product/{id}',  [Products::class, 'Delete']);
 

Route::get('DeleteImage/{id}',  [Products::class, 'DeleteImage']);


Route::post('Message',  [GeneralController::class, 'storemessage']);







