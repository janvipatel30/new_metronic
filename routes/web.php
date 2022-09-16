<?php

use App\Http\Controllers\backend\dashboard\DashboardController;
use App\Http\Controllers\backend\Login\LoginController;
use App\Http\Controllers\backend\support_staff\SupportStaffController;
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

Route::get('home',[DashboardController::class, 'home'])->name('home');
Route::get('login',[LoginController::class, 'login'])->name('login');

Route::get('support-staff',[SupportStaffController::class, 'list'])->name('support-staff');

Route::get('add-support-staff',[SupportStaffController::class, 'add'])->name('add-support-staff');

Route::post('support-staff-list-ajaxcall',[SupportStaffController::class, 'ajaxcall'])->name('support-staff-list-ajaxcall');
