<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarrouselController;
use App\Http\Controllers\ObituariesController;
use App\Http\Controllers\UserController;
use App\Mail\ContactanosMailable;
use App\Models\CarrouselImage;
use App\Models\Headquarters;
use App\Models\Obituaries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home/home')->with([
        'carrousel' => CarrouselImage::all(),
    ]);
})->name('home');

Route::view('/zafiro.zafiro', 'zafiro.zafiro')->name('zafiro');

Route::view('/planes.planes', 'planes.planes')->name('planes');

Route::view('/pagos.pagos', 'pagos.pagos')->name('pagos');

Route::view('/obituario.obituario', 'obituario.obituario')->name('obituario');

Route::view('/headquarters.headquarters', 'headquarters.headquarters')->name('headquarters');

Route::get('/login',fn() => view('login'))->name('login')   ;

Route::get('/obituariesClient',function(){
    return view('obituario.obituario')->with([
        'obituaries' => Obituaries::all(),
        'headquarters' => Headquarters::all(),
    ]);
})->name('obituaries.client');

Route::post('/obituariesHeadquartersClient',function(Request $request){
    $headquarter = Headquarters::findOrFail($request->input('municipality_id'));
    return view('obituario.obituario')->with([
        'obituaries' => $headquarter->obituaries,
        'headquarters' => Headquarters::all(),
    ]);
})->name('obituaries.headquarters.client');

Route::post('/contactanos',function(Request $request){
    $request->validate([
        'name' => ['string','required'],
        'phone' => ['string','required'],
        'email' => ['email','required'],
        'message' => ['string','required'],
    ]);

    Mail::to('paginasenderosdepaz@gmail.com')->send(new ContactanosMailable($request->all()));
    return redirect()
        ->back()
        ->withSuccess("se ha enviado el contacto");
})->name('contactanos');


//vistas auth

Route::get('/dashboard',fn() => view('dashboard.dashboard'))->name('dashboard')
    ->middleware('auth');

Route::post('/login',[AuthController::class,'login'])->name('login');

Route::post('/logout',[AuthController::class,'logout'])->name('logout')->middleware('auth');

Route::resource('/carrousel',CarrouselController::class)
    ->names('carrousel')
    ->only(['index','create','store','destroy'])->middleware(['auth','is.admin']);

Route::resource('/obituaries',ObituariesController::class)
    ->names('obituaries')
    ->only(['index','create','store','edit','update','destroy'])->middleware('auth');

Route::get('/register',function(){
    return view('dashboard.register')->with([
    'headquarters' => Headquarters::all(),
    ]);
})->name('register')->middleware(['auth','is.admin']);

Route::post('/register',[UserController::class,'register'])->name('register')->middleware(['auth','is.admin']);

Route::resource('/users',UserController::class)
    ->names('users')
    ->only(['index','create','store,','edit','update','destroy'])->middleware(['auth','is.admin']);
