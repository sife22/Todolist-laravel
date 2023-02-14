<?php

use App\Http\Controllers\TodoController;
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

// ======== show all of data ========
Route::get('/', [TodoController::class, 'index']);
// =================================

// ======== go to create task page ========
Route::get('create', [TodoController::class, 'create']);
// =======================================

// ======== if we add, we will store it in database ========
Route::post('store-data', [TodoController::class, 'store']);    
// =========================================================

Route::get('details/{todo}', [TodoController::class, 'details']);
Route::get('edit/{todo}', [TodoController::class, 'edit']);
Route::post('update/{todo}', [TodoController::class, 'update']);
Route::get('delete/{todo}', [TodoController::class, 'delete']);



