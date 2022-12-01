<?php

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

Route::get('/signup', function () { // 使用者註冊的畫面
    return view('users.create');
});
// Route::controller(SignUpController::class)
//     ->prefix('/sign-ups')
//     ->name('sign-ups.')
//     ->group(function () {
//         Route::get('/', 'index')->name('index');
//         // Route::post('{sign_up}/check-in', 'checkIn')->name('check_in');
//     });
