<?php

use App\Models\ProjectDetails; // 注意大小写
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectDetailsController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group
| which contains the "web" middleware group. Now create something great!
|
*/
Route::post('projectdetails/store',[ProjectDetailsController::class, 'store'])->name('projectdetails.store');

Route::get('projectdetails/create', [ProjectDetailsController::class, 'create'])->name('projectdetails.create');
// 路由1: 显示所有项目详情的页面
Route::get('projectdetails', [ProjectDetailsController::class, 'index'])->name('projectdetails.index');

// 路由2: 使用匿名函数显示项目详情页面
Route::get('projectdetails/indexnew', function () {
    $projectdetails = ProjectDetails::all();  // 获取所有项目详情
    return view('projectdetails.indexnew', compact('projectdetails'));  // 返回视图并传递数据
});

// 路由3: 显示单个项目详情页面，带有 id 参数
Route::get('projectdetails/{id}', [ProjectDetailsController::class, 'show'])
    ->where('id', '[0-9]+')  // 确保 id 参数为数字
    ->name('projectdetails.show');  // 给这个路由命名

    Route::delete('projectdetails/{id}', [ProjectDetailsController::class, 'destroy'])->name('projectdetails.destroy');
