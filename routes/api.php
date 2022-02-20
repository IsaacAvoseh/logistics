<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/blog', [ApiController::class, 'blog']);
Route::match(['GET', 'POST'],'/blog2', [ApiController::class, 'AdminBlog']);
Route::match(['get', 'post', 'PUT'], '/blog2/{id}', [ApiController::class, 'AdminUpdateBlog']);
Route::match(['get', 'post', 'DELETE'], '/delete/{id}', [ApiController::class, 'AdminDeleteBlog']);
Route::get('/blog/{id}', [ApiController::class, 'blogSingle']);
Route::get('/user', [ApiController::class, 'users']);