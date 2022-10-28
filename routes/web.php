<?php
use App\Http\Controllers\ExampleController1;
use App\Http\Controllers\PhoneBookController;
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
    return view('welcome');
});

Route::get('phone_book', [PhoneBookController::class, 'index'])->name('phone_book.index');
Route::post('phone_book', [PhoneBookController::class, 'store'])->name('phone_book.store');

Route::get('phone_book/create', [PhoneBookController::class, 'create'])->name('phone_book.create');
Route::get('phone_book/{id}/edit', [PhoneBookController::class, 'edit'])->name('phone_book.edit');

Route::get('phone_book/{id}', [PhoneBookController::class, 'show'])->name('phone_book.show');
Route::put('phone_book/{id}', [PhoneBookController::class, 'update'])->name('phone_book.update');
Route::delete('phone_book/{id}', [PhoneBookController::class, 'destroy'])->name('phone_book.destroy');
