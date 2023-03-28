<?php

use App\Http\Controllers\AdminController;
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




// Route::prefix('admin')->namespace('Admin')->group(function(){
    // Route::get('/',[AdminController::class,'index']);

    
// });

route::prefix('admin')->namespace('Admin')->group(function () {

//     // Route::get('/', 'AdminDashboardController@index')->name('admin.home');
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
});

