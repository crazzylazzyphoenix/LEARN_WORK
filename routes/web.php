<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\oldController;
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
    return view('welcome');
    //string $uri, array|string|callable|null $action = null)
});
Route::get('/old', [oldController::class, 'index'])->name('old.index'); //gọi hàm index trong class oldController
Route::post('/old', [oldController::class, 'store'])->name('old.store');//gọi hàm store 
Route::get('/old/create', [oldController::class, 'create'])->name('old.create');//gọi hàm create
Route::get('/old/about', [oldController::class, 'about'])->name('old.about');//call about
Route::get('/old{old}/edit', [oldController::class, 'edit'])->name('old.edit');//call edit{có tham số truyền vào là old}
Route::put('/old{old}/update', [oldController::class, 'update'])->name('old.update');//call update {có tham số truyền vào là old}
Route::delete('/old{old}/delete', [oldController::class, 'delete'])->name('old.delete');//call delete {có tham số truyền vào là old}
