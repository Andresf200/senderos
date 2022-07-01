<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Headquarters;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('dashboard.users.index')->with([
            'users' => User::all(),
        ]);
    }

    public function create(): Factory|View|Application
    {
        //todo aquí hace falta arreglar esto
        return view('dashboard.users.create')->with([
            'headquarters' => Headquarters::all(),
        ]);
    }

    public function edit(User $user): Factory|View|Application
    {
        return view('dashboard.users.edit')->with([
            'user' => $user,
            'headquarters' => Headquarters::all(),
        ]);
    }

    public function register(RegisterRequest $request)
    {
        dd($request->all());
        $user = User::create($request->validated());
        return redirect()
            ->route('users.index')
            ->withSuccess("El nuevo usuario con id {$user->id} fue creado");
    }

    public function update(UpdateProfileRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()
            ->route('users.index')
            ->withSuccess("El usuario con id {$user->id} fue editado");

    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()
            ->route('users.index')
            ->withSuccess("El usuario con id {$user->id} fue eliminado");
    }
}
