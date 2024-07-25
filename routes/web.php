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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('/site');
});

Route::get('/site', function(){
    return view('site');
  });

Route::get('/site/moscow', function(){
    return view('moscow');
});

// Route::get('/site/kazan', function(){
//     return view('kazan');
// });

Route::get('/site/kazan', [App\Http\Controllers\KazanController::class, 'index'])->name('kazan');