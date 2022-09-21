<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Purchase;


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

Route::get('/','pageController@welcome'); 

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('profile.about');
// })->name('about');

Route::view('/about','profile.about')->name('about');

Route::get('/contactus', function () {
    return view('contactus');
});

// dito mali kasi niredirect mo ung /login na routes sa welcome view 
// Route::get('/login', function () {
//     return view('welcome');
// });


// dito naman comment mo to eh ito ung routes para sa dashboard
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function(){
    Route::view('request','livewire.requests-lists')->name('requests');
    Route::get('purchase',Purchase::class)->name('purchase');
    Route::view('apply','livewire.modal')->name('apply');
    
});
