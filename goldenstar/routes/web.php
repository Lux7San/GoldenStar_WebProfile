<?php

use Illuminate\Support\Facades\Route;
//admin
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\EventAdminController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\GaleryAdminController;
use App\Http\Controllers\YtLinkAdminController;
//user
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\YtLinkController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//user
Route::get('/home', [HomeAdminController::class, 'index2']);

//event
Route::get('/event', [EventController::class, 'index']);
//profile
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/detail/{id}', [ProfileController::class, 'detail']);
//gallery
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/galery/detail/{id}', [GalleryController::class, 'detail']);
//yt-link
Route::get('/yt-link', [YtLinkController::class, 'index']);

//admin
//login
Auth::routes();
// Route::get('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::group(['middleware' =>'auth'], function(){
    //home
    Route::get('/admin/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/admin/home', [HomeAdminController::class, 'index']);
    
    //event
    Route::get('/admin/event', [EventAdminController::class, 'index'])->name('event');
    Route::post('/admin/event/create',[EventAdminController::class, 'create']);
    Route::get('/admin/event/edit/{id}', [EventAdminController::class, 'edit']);
    Route::post('/admin/event/update/{id}', [EventAdminController::class, 'update']);
    Route::get('/admin/event/delete/{id}', [EventAdminController::class, 'delete']);
    
    //Profile
    Route::get('/admin/profile', [ProfileAdminController::class, 'index'])->name('profile');
    Route::post('/admin/profile/create',[ProfileAdminController::class, 'create']);
    Route::get('/admin/profile/edit/{id}', [ProfileAdminController::class, 'edit']);
    Route::post('/admin/profile/update/{id}', [ProfileAdminController::class, 'update']);
    Route::get('/admin/profile/delete/{id}', [ProfileAdminController::class, 'delete']);
    
    //Galery
    Route::get('/admin/galery', [GaleryAdminController::class, 'index'])->name('galery');
    Route::post('/admin/galery/create',[GaleryAdminController::class, 'create']);
    Route::get('/admin/galery/delete/{id}', [GaleryAdminController::class, 'delete']);
    
    //Yt-Link
    Route::get('/admin/yt-link', [YtLinkAdminController::class, 'index'])->name('yt-link');
    Route::post('/admin/yt-link/create', [YtLinkAdminController::class, 'create']);
    Route::get('/admin/yt-link/delete/{id}', [YtlinkAdminController::class, 'delete']);
});



