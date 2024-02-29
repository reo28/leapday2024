<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EDController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ListStoreController;
use App\Http\Controllers\CorporationController;
use App\Http\Controllers\AdminFunctionsController;

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/authadmin.php';
         
Route::get('/add-task', [AdminFunctionsController::class, 'addTask']);             //admin tasks
Route::post('/create-task', [AdminFunctionsController::class, 'createTask']);
Route::get('/added-tasks', [AdminFunctionsController::class, 'viewAddedTasks']);
Route::get('/edit-tasks', [AdminFunctionsController::class, 'editTasks']);
Route::delete('/delete-task/{task}', [AdminFunctionsController::class, 'delete']);


Route::get('/import-corporation-page',[CorporationController::class, 'indexCorp']);
Route::get('/corp/search',[CorporationController::class, 'searchCorp']);
Route::post('/corp/import',[CorporationController::class, 'importCorp']);
Route::get('/search',[CorporationController::class, 'search']);

Route::get('/import-store-page',[StoreController::class, 'indexStore']);
Route::get('/store/search',[StoreController::class, 'searchStore']);
Route::post('/store/import',[StoreController::class, 'importStore']);
Route::get('/search-stores',[StoreController::class, 'searchStore']);

Route::get('/list-of-stores',[ListStoreController::class, 'listOfstores']);
Route::post('/add-user',[ListStoreController::class, 'listOfstores']);


Route::get('/add-user', [AdminController::class, 'addUserPage']);       
Route::post('/add-user', [AdminController::class, 'createUser']); 

//edit/delete routrs (task)
Route::get('/edit-task/{task}', [EDController::class, 'editTask']);
Route::put('/edit-task/{task}', [EDController::class, 'updateTask']); 
Route::delete('/delete-task/{task}', [EDController::class, 'deleteTask']);

//edit/delete routes(store)
Route::get('/edit-store/{store}', [ListStoreController::class, 'editStore']);
Route::put('/edit-store/{store}', [ListStoreController::class, 'updateStore']); 
Route::delete('/delete-store/{store}', [ListStoreController::class, 'deleteStore']);

