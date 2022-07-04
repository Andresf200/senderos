<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarrouselController;
use App\Http\Controllers\ObituariesController;
use App\Http\Controllers\UserController;
use App\Mail\ContactanosMailable;
use App\Models\Headquarters;
use App\Models\Obituaries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home/home');
})->name('home');

Route::view('/zafiro.zafiro', 'zafiro.zafiro')->name('zafiro');

Route::view('/planes.planes', 'planes.planes')->name('planes');

Route::view('/pagos.pagos', 'pagos.pagos')->name('pagos');

Route::view('/obituario.obituario', 'obituario.obituario')->name('obituario');

//Route::view('/login', 'login')->name('login');

Route::view('/headquarters.headquarters', 'headquarters.headquarters')->name('headquarters');

Route::get('/dashboard',fn() => view('dashboard.dashboard'))->name('dashboard')
    ->middleware('auth');

//todo no existen la vistas
Route::get('/repatriation',fn() => view('repatriation'))->name('repatriation');

Route::get('/card-zafiro',fn() => view('card-zafiro'))->name('card.zafiro');

Route::get('/plan-pet',fn() => view('plan-pet'))->name('plan.pet');

Route::get('/our-locations',fn() => view('our-locations'))->name('our.locations');
//todo end

Route::get('/login',fn() => view('login'))->name('login')   ;

Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');


Route::resource('/carrousel',CarrouselController::class)
    ->names('carrousel')
    ->only(['index','create','store','destroy']);


Route::resource('/obituaries',ObituariesController::class)
    ->names('obituaries')
    ->only(['index','create','store','edit','update','destroy']);

Route::get('/register',function(){
    return view('dashboard.register')->with([
    'headquarters' => Headquarters::all(),
    ]);
})->name('register');

Route::post('/register',[UserController::class,'register'])->name('register');

Route::resource('/users',UserController::class)
    ->names('users')
    ->only(['index','create','store,','edit','update','destroy']);

Route::get('/obituariesClient',function(){
    return view('obituario.obituario')->with([
        'obituaries' => Obituaries::all(),
        'headquarters' => Headquarters::all(),
    ]);
})->name('obituaries.client');

//Route::view('/dashboard.obituaries.create', 'dashboard.obituaries.create')->name('obituaries.create');
//Route::view('/dashboard.obituaries.edit', 'dashboard.obituaries.edit')->name('obituaries.edit');

Route::post('contactanos',function(Request $request){
    $request->validate([
       'name' => ['string','required'],
       'phone' => ['string','required'],
       'email' => ['email','required'],
       'message' => ['string','required'],
    ]);

    $instanceContactMailable = new ContactanosMailable($request->all());
   Mail::to('afloriangonzales@gmail.com')->send($instanceContactMailable);

    return redirect()
        ->back()
        ->withSuccess("se ha enviado el contacto");
});
