<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CompanyController;

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

Route::get('/', [AppController::class , 'index'] );

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// User

Route::get('/user', [ AppController::class , 'userIndex' ])->name('user.index');


// Ticket

Route::get('/ticket/create', [ AppController::class  , 'ticketCreate' ])->name('ticket.create');
Route::post('/ticket/store', [ AppController::class  , 'ticketStore' ])->name('ticket.store');

// FQA

Route::get('/fqa', [ AppController::class  , 'fqa' ])->name('fqa');

// Company

Route::get('/company', [ CompanyController::class , 'index' ])->name('company.index');
Route::put('/company/priority/create/{id}', [ CompanyController::class , 'priorityStore' ])->name('priority.create');

// Items

Route::get('/item', [ CompanyController::class , 'itemIndex' ])->name('item.index');
Route::put('/item/qty/update/{id}', [ CompanyController::class , 'updateQty' ])->name('item.update');


require __DIR__.'/auth.php';
