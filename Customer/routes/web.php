<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

// Route::get('/', function () {
//     return view('index');
// })->name('index');

Route::get('/',[CustomerController::class,'showCustomer'])->name('index');
Route::post('insertCustomer',[CustomerController::class,'insertCustomer'])->name('insertCustomer');
Route::post('editCustomer',[CustomerController::class,'editCustomer'])->name('editCustomer');
Route::post('updateCustomer',[CustomerController::class,'updateCustomer'])->name('updateCustomer');
