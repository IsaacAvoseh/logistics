<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaymentController;
use Illuminate\Routing\Route as RoutingRoute;
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

// Paystack
Route::get('/form', [PaymentController::class, 'form']);
// Route::get('/payment/callback ', [PaymentController::class, 'handleGatewayCallBack']);
// Laravel 8
Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback'])->name('callback');

Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');







Route::get('/new', [PagesController::class, 'quote_est'])->name('new');
Route::get('/table', [PagesController::class, 'table'])->name('new');
Route::post('/new', [PagesController::class, 'newOne'])->name('newOne');
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::match(['get', 'post'],'/contact', [PagesController::class, 'contactUs'])->name('contact');
Route::match(['post', 'get'],'/quote', [PagesController::class, 'showQuote'])->name('quote');
Route::match(['post', 'get'],'/quote_est', [PagesController::class, 'getQuoteEst'])->name('quote_est');
Route::get('/blog', [PagesController::class, 'blog']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::match(['post', 'get'], '/track', [PagesController::class, 'trackOrder']);
Route::get('/quote/{$id}', [PagesController::class, 'quote']);
//trackStatusSuccess($id)
Route::get('/track/{$id}', [PagesController::class, 'trackStatus']);



Route::match(['get', 'post'],'/login', [AdminController::class, 'AdminLogin'])->middleware('isAlreadyLoggedIn');
Route::match(['get', 'post'],'/register', [AdminController::class, 'AdminRegister'])->middleware('isAlreadyLoggedIn');
Route::get('/logout', [AdminController::class, 'logOut']);
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('isLoggedIn');
Route::match(['get', 'post'],'/calculator', [AdminController::class, 'update'])->name('calculator')->middleware('isLoggedIn');
Route::get('/contact2', [AdminController::class, 'AdminContact'])->middleware('isLoggedIn');
// view single contact
Route::get('/contact2/{id}', [AdminController::class, 'viewContact'])->middleware('isLoggedIn');
// delete contact
Route::get('/contact2/{id}/delete', [AdminController::class, 'deleteContact'])->middleware('isLoggedIn');
Route::match(['get', 'post'],'/blog2', [AdminController::class, 'AdminBlog'])->middleware('isLoggedIn');

Route::match(['get', 'post'],'/blog2/{id}/delete', [AdminController::class, 'AdminDeleteBlog'])->middleware('isLoggedIn');
//read single blog
Route::get('/blog/{id}/view', [PagesController::class, 'AdminViewBlog']);
Route::match(['get', 'post'],'/blog2/{id}', [AdminController::class, 'AdminUpdateBlog'])->middleware('isLoggedIn');
Route::match(['post', 'get'], '/orders/{id}', [AdminController::class, 'Details'])->middleware('isLoggedIn');

Route::get('/orders', [AdminController::class, 'AdminOrders'])->middleware('isLoggedIn');
Route::match(['get', 'post'], '/order', [AdminController::class, 'OrderStatus'])->name('order');

Route::match(['get', 'post'],'/settings', [AdminController::class, 'updateAboutUs'])->middleware('isLoggedIn');
//popular blog post
// Route::match(['get', 'post'],'/blog2/{type}/popular', [PagesController::class, 'popularBlog']);