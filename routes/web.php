<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JasperController;
use App\Http\Controllers\CustomerMessageController;

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
    return view('master');
});


Route::get('generate_report', [JasperController::class, 'generateReportTable']);
Route::post('/register_customer_msg', [CustomerMessageController::class, 'register_customer_msg'])->name('register_customer_msg');
