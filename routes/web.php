<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
})->name("welcome");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/score-page', [App\Http\Controllers\ScorePageController::class, 'index'])->name('score-page')->middleware(['auth','track_user_time']);
Route::get('/score-page', \App\Livewire\ScoreComponent::class)->name('score-page')->middleware(['auth','track_user_time']);

Auth::routes();

//Route::get('/', function () {
//    return view('auth.login');
//})->name("login");

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/wizard-form', \App\Livewire\WizardForm::class)->name('wizard-form');

