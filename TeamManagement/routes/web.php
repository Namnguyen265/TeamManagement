<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\TeamController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/department', [DepartmentController::class, 'showDepartment'])->name('showDepartment');
Route::get('/team', [TeamController::class, 'showTeam'])->name('showTeam');
Route::post('/team', [TeamController::class, 'addTeam']);
Route::get('/team/{id}', [TeamController::class, 'editTeam'])->name('edit_team');
Route::post('/team/{id}', [TeamController::class, 'updateTeam'])->name('update_team');
Route::get('deleteteam/{id}', [TeamController::class, 'deleteTeam'])->name('delete_team');
Route::get('/cancel', [TeamController::class, 'cancel'])->name('cancel');
Route::post('search-team', [TeamController::class, 'search'])->name('search_team');