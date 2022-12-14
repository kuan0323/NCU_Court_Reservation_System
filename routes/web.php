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

Route::get('/signup', function () {
    return view('users.create');
});

Route::get('/member-homepage', function () {
    return view('member_homepage');
});

Route::get('/account-infos', function () {
    return view('account_infos');
});
// Route::controller(SignUpController::class)
//     ->prefix('/sign-ups')
//     ->name('sign-ups.')
//     ->group(function () {
//         Route::get('/', 'index')->name('index');
//         // Route::post('{sign_up}/check-in', 'checkIn')->name('check_in');
//     });
