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
echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "2141720044 -- Alfina Salsabilla";
    });

    Route::get('/articles/{id}', function ($id) {
        echo "halaman artikel ke". $id;
        });
    