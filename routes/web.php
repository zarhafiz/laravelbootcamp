<?php

use App\Http\Controllers\MemberController;
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
    return view('main');
});

Route::get('/member/register', [ MemberController::class, 'register' ] );


Route::get('/member', [ MemberController::class, 'index' ] );

Route::get('/member/profile', [ MemberController::class, 'profile' ] );

Route::get('/member/login', [ MemberController::class, 'login' ] );
Route::view('dashboard', 'dashboard')
	->name('dashboard')
	->middleware(['auth', 'verified']);
