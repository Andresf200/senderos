<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarrouselController;
use App\Http\Controllers\ObituariesController;
use App\Http\Controllers\UserController;
use App\Models\Headquarters;
use App\Models\Obituaries;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard',fn() => view('dashboard.dashboard'))->name('dashboard')
    ->middleware('auth');

//todo no existen la vistas
Route::get('/repatriation',fn() => view('repatriation'))->name('repatriation');

Route::get('/card-zafiro',fn() => view('card-zafiro'))->name('card.zafiro');

Route::get('/plan-pet',fn() => view('plan-pet'))->name('plan.pet');

Route::get('/our-locations',fn() => view('our-locations'))->name('our.locations');
//todo end

Route::get('/login',fn() => view('login'))->name('login')->middleware('guest');

Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');


Route::resource('/carrousel',CarrouselController::class)
    ->names('carrousel')
    ->only(['index','create','store','destroy']);


Route::resource('/obituaries',ObituariesController::class)
    ->names('obituaries')
    ->except(['show']);

Route::get('/register',function(){
    return view('dashboard.register')->with([
    'headquarters' => Headquarters::all(),
    ]);
})->name('register');

Route::post('/register',[UserController::class,'register'])->name('register');

Route::resource('/users',UserController::class)
    ->names('users')
    ->only(['index','show','edit','update','destroy'])
    ->middleware('is.admin');

Route::get('/obituariesClient',function(){
    return view('obituariesClient')
    ->with([
        'obituaries', Obituaries::all()
        ]);
})->name('obituaries.client');
