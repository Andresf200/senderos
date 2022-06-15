<?php

namespace App\Http\Controllers;

use App\Http\Requests\ObituariesStoreRequest;
use App\Http\Requests\ObituariesUpdateRequest;
use App\Models\CarrouselImage;
use App\Models\Headquarters;
use App\Models\Obituaries;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ObituariesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //todo crear vista
    public function index(): Factory|View|Application
    {
        return view('obituaries.index')->with([
            'obituaries' => Obituaries::all(),
            'headquarters' => Headquarters::all(),
        ]);
    }

    public function create()
    {
       return view('dashboard.obituaries.create')->with([
           'headquarters' => Headquarters::all(),
       ]);
    }

    public function store(ObituariesStoreRequest $request)
    {
        $obituarie = Obituaries::create($request->validated());

        return redirect()
            ->route('obituaries.index')
            ->withSuccess("El nuevo obituario con id {$obituarie->id} fue creado");
    }

    public function edit(Request $request)
    {
        return view('obituaries.edit')->with([
            'obituaries' => $request->user(),
            'headquarters' => Headquarters::all(),
        ]);
    }

    public function update(ObituariesUpdateRequest $request, Obituaries $obituarie)
    {
        $obituarie->update($request->validated());

        return redirect()
            ->route('obituaries.index')
            ->withSuccess("El obituario con id {$obituarie->id} fue editado");
    }

    public function destroy(Obituaries $obituarie)
    {
        $obituarie->delete();

        return redirect()
            ->route('obituaries.index')
            ->withSuccess("El obituario con id {$obituarie->id} fue eliminado");
    }
}
