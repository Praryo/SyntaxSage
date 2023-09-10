<?php

use Illuminate\Support\Facades\Route;

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
    return view('homepage');
})->name('homepage');

// Authentications
Route::get('auth', function () {
	if (Auth::check())
		return redirect()->route('homepage');
	
    return view('user-authentication');
})->name('user-authentication');

Route::get('logout', function () {
	if (!Auth::check())
		return redirect()->route('homepage');
	
	auth()->logout();
	
    return redirect('/');
})->name('logout');

Route::get('/account', App\Http\Livewire\AccountManagement::class)->middleware('syntaxauth')->name('account');

// OpenAI Features
Route::get('/openai/{type}/{id}', App\Http\Livewire\OpenAIFeature::class)->middleware('syntaxauth')->name('openai');