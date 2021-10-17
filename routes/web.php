<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ContactController;

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

Route::get('/index', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/skills', [SkillsController::class, 'skills']);
Route::get('/experience', [ExperienceController::class, 'experience']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::post('add', [ContactController::class, 'add']);