<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailsController;
use App\Models\Details;

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

Route::get('Details.index', [DetailsController::class, 'index'] );

Route::get('/Details.index2', function () {
    $Details = Details::all();
    return view('Details.index2', compact('Details'));
});

 // 顯示
 Route::get('Details/{id}', [DetailsController::class, 'show'])->where('id', '[0-9]+')->name('Details.show');
 // 修改
 Route::get('Details/{id}/edit', [DetailsController::class, 'edit'])->where('id', '[0-9]+')->name('Details.edit');
 //刪除
 Route::delete('Details/delete/{id}', [DetailsController::class, 'destroy'])->where('id', '[0-9]+')->name('Details.destroy');