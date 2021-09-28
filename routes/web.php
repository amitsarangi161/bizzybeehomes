<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\FrontendController;


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

Route::get('/', [FrontendController::class,'index']);
Route::get('/terms-and-conditions', [FrontendController::class,'termsandconditions']);
Route::post('/sendquery', [FrontendController::class,'sendquery']);
Route::post('/ajaxchangepoststatus', [FrontendController::class,'ajaxchangepoststatus']);
Route::post('/subscribe', [FrontendController::class,'subscribe']);

// Authentication Routes...

Route::get('login', [LoginController::class,'showLoginForm'])->name('login');
Route::post('login', [LoginController::class,'login']);
Route::post('logout', [LoginController::class,'logout'])->name('logout');

// Registration Routes...
// Route::get('register', [RegisterController::class,'showRegistrationForm'])->name('register');
// Route::post('register', [RegisterController::class,'register']);


// // Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
Route::get('/home', [HomeController::class, 'index']);
Route::get('/pages/contactus', [HomeController::class, 'contactus']);
Route::post('/updatecontact', [HomeController::class, 'updatecontact']);


Route::get('/pages/termsandconditions', [HomeController::class, 'termsandconditions']);
Route::post('/updatetermsandconditions', [HomeController::class, 'updatetermsandconditions']);


Route::get('/pages/aboutus', [HomeController::class, 'aboutus']);
Route::post('/updateaboutus', [HomeController::class, 'updateaboutus']);




Route::get('/queries/allquery', [HomeController::class, 'allquery']);
Route::get('/subscribers/allsubscribers', [HomeController::class, 'allsubscribers']);

});
