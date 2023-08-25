<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::controller(HomeController::class)
    ->prefix('home')
    ->name('home.')
    ->group(function($g) {
        $g->post('/register', 'register')->name('register');
        $g->post('/login', 'login')->name('login');
        $g->get('/logout', 'logout')->name('logout');
});

Route::prefix('admin')->name('admin.')->namespace('admin')->group(function($admin) {
    $admin->view('/login', 'admin.login.index')->name('login');
    $admin->post('/login', [AuthController::class, 'login'])->name('doLogin');
    $admin->middleware('auth')->group(function($auth) {
        $auth->name('dashboard.')
            ->prefix('dashboard')
            ->controller(DashboardController::class)
            ->group(function($g) {
                $g->view('/', 'admin.dashboard.index')->name('dashboard.index');
            });
    });
});