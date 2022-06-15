<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarrouselRequest;
use App\Models\CarrouselImage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class CarrouselController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index(): Factory|View|Application
    {
        return view('dashboard.carrousel.index')->with([
            'carrouselImages' => CarrouselImage::all(),
        ]);
    }

    public function create(): Factory|View|Application
    {
        return view('dashboard.carrousel.create');
    }

    public function store(CarrouselRequest $request)
    {
            if($request->hasFile('carrouselImage')){
                $file = $request->file('carrouselImage');
                $destinationPath = 'img/carrousel/';
                $fileName = time().'-'.$file->getClientOriginalName();
                $uploadSuccess = $request->file('carrouselImage')->move(public_path($destinationPath), $fileName);
                CarrouselImage::create([
                   'name' => $fileName,
                   'path' => $destinationPath.$fileName
                ]);
            }
        return view('dashboard.carrousel.create')->with(['status', "la imagen fue subida con exito"]);
    }

    public function destroy(CarrouselImage $carrousel): Factory|View|Application
    {
            File::delete(public_path($carrousel->path));
            $carrousel->delete();
        return view('dashboard.carrousel.create')->with(['status', "la imagen fue eliminada con exito"]);
    }
}
