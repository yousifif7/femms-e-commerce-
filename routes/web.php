<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ProductsController;

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
    return view('/navs/index');
});

//view products page
Route::get('/products', [PagesController::class, 'products']);

//view contact page
Route::get('/contact', [PagesController::class, 'contact']);

//view contact page
Route::get('/reviews', [PagesController::class, 'reviews']);

//view about us page
Route::get('/aboutus', [PagesController::class, 'aboutus']);

//return admin page
Route::get('/manage', [PagesController::class, 'manage']);

//return admin page
Route::get('/manage/products', [PagesController::class, 'manageproducts'])->middleware('auth');

//return admin page
Route::get('/manage/messages', [PagesController::class, 'messages'])->middleware('auth');

//submit a contact form
Route::post('/form/contact', [ContactController::class, 'store']);

//post a product
Route::post('/product/create', [ProductsController::class, 'store']);


// Show new register form
Route::get('/signup', [UserController::class , 'index'])->middleware('guest');

//store a new user
Route::post('/users', [UserController::class , 'store']);

//log out user
Route::post('/logout', [UserController::class , 'logout']);

//show Log in form
Route::get('/login', [UserController::class , 'login'])->name('login')->middleware('guest');

//log user in 
Route::post('/users/authenticate', [UserController::class , 'authenticate']);

//Show single product page
Route::get('/product/{product}', [ProductsController::class, 'show']);


//store a new user
Route::post('/cart/product', [CartController::class , 'store']);

//show user cart
Route::get('/cart', [CartController::class , 'cart'])->middleware('auth');

//Delete item from cart
Route::post('/cart/{id}', [CartController::class , 'destroy'])->middleware('auth');


// submit a review
Route::post('/review', [ReviewsController::class , 'store'])->middleware('auth');

//Delete a product
Route::post('/product/{id}', [ProductsController::class , 'destroy'])->middleware('auth');





