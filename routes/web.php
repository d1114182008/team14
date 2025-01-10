<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
})->name('Details.index2');

 // 顯示
 Route::get('Details/{id}', [DetailsController::class, 'show'])->where('id', '[0-9]+')->name('Details.show');
 // 修改
 Route::get('Details/{id}/edit', [DetailsController::class, 'edit'])->where('id', '[0-9]+')->name('Details.edit');
 Route::patch('Details/update/{id}', [DetailsController::class, 'update'])->where('id', '[0-9]+')->name('Details.update');
 //刪除
 Route::delete('Details/delete/{id}', [DetailsController::class, 'destroy'])->where('id', '[0-9]+')->name('Details.destroy');
 //新增資料
 Route::get('Details/create', [DetailsController::class, 'create'])->name('Details.create');
 //儲存一筆資料
 Route::post('Details/store',[DetailsController::class, 'store'])->name('Details.store');

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Auth::routes();
