<?php

namespace App\Http\Controllers;

use App\Models\Headquarters;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HeadquartersObituariesController extends Controller
{
    public function index(Headquarters $headquarter): RedirectResponse
    {
        $obituaries = $headquarter->obituaries();
        return redirect()->back()->with([
            'obituaries' =>  $obituaries,
            'headquarters' => Headquarters::all()
        ]);
    }
}
