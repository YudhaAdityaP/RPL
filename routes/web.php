<?php

use App\Http\Controllers\cashController;
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
    return view('layout.index');
});
Route::get('cash', [cashController::class]);
// Route::get('show', function(){
//     return view('cash.cashflow');
//     return view('cash.income');
//     return view('cash.outcome');
// });
