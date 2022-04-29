<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\UserController;

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

Auth::routes();

Route::get('/home', [UserController::class, 'index'])->name('home');

Route::get('getcategory/{slug}', [UserController::class, 'getproductbycategory']);
Route::get('productdetails/{id}', [ProductController::class, 'productdetails']);
Route::get('addproducttocart/{id}', [ProductController::class, 'addproducttocart']);
Route::post('addtocart/{id}', [CartController::class, 'addtocart']);
    
Route::get('dashboard', [FrontendController::class, 'index']);
Route::get('mycart', [UserController::class, 'mycart']);

Route::get('contactus', [UserController::class, 'contactus']);
Route::post('sendcontactmessage', [UserController::class, 'sendcontactmessage']);
Route::post('search', [UserController::class, 'search']);
Route::get('allcategoty', [UserController::class, 'allcategoty']);
Route::get('useralloffers', [UserController::class, 'alloffers']);
Route::get('allproducts', [UserController::class, 'allproducts']);
Route::get('offerdetails/{id}', [ProductController::class, 'offerdetails']);

Route::get('edietcart/{id}', [CartController::class, 'edietcart']);
Route::get('deletcart/{id}', [CartController::class, 'deletcart']);
Route::post('update_cart/{id}', [CartController::class, 'update_cart']);
Route::get('edietoffercart/{id}', [CartController::class, 'edietoffercart']);



Route::middleware(['auth','admin'])->group(function()
{
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/addcategory', [CategoryController::class, 'add']);
    Route::post('insert_category', [CategoryController::class, 'insert']);
    Route::get('editcategory/{id}', [CategoryController::class, 'editcategory']);
    Route::post('update_category/{id}', [CategoryController::class, 'update_category']);
    Route::get('deletcategory/{id}', [CategoryController::class, 'deletcategory']);
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/addproduct', [ProductController::class, 'add']);
    Route::post('insert_product', [ProductController::class, 'insert']);
    Route::post('insert_offer', [ProductController::class, 'insert_offer']);
    Route::get('addoffer', [ProductController::class, 'addoffer']);

        
    Route::get('editproduct/{id}', [ProductController::class, 'editproduct']);
    Route::post('update_product/{id}', [ProductController::class, 'update_product']);
    Route::get('deletproduct/{id}', [ProductController::class, 'deletproduct']);
    
    Route::get('editoffer/{id}', [ProductController::class, 'editoffer']);
    Route::post('update_offer/{id}', [ProductController::class, 'update_offer']);
    Route::get('deletoffer/{id}', [ProductController::class, 'deletoffer']);
    Route::get('alloffers', [ProductController::class, 'alloffers']);

    
});