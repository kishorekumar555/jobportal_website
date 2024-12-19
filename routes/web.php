<?php

use App\Http\Controllers\AddJobsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FindJobsController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecruiterController;

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

Route::get('/home', [HomePageController::class, 'showHomePage'])->name('home');
Route::get('/findjobs', [FindJobsController::class, 'showJobsPage'])->name('findjobs');
Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup');
Route::post('/register', [SignupController::class, 'register'])->name('register');
Route::get('/login',[AuthController::class,'showLoginForm'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::get("/forgot_password",[AuthController::class,'showForgotPasswordForm'])->name('password.request');
Route::post("/forgot_password",[AuthController::class,'sendResentLink'])->name("password.email");
Route::get("/recruiter",[RecruiterController::class,'showRecruiterPage'])->name('recruiter');
Route::get("/addjobs",[AddJobsController::class,'addjobs'])->name('addjobs');
Route::get("/profile",[ProfileController::class,'addProfilePage'])->name('profile');