<?php

namespace App\Http\Controllers;

use App\User;
use App\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol = Rol::pluck('name', 'id');

        return view('user.create', compact('rol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'rol_id' => $request->rol_id,
            'password' => Hash::make($request->password),
            'state' => "Activo"
        ]);

        return redirect()->route('user.index')
            ->with('info', 'usuario creado con Exito!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {
        $rol =  Rol::pluck('name', 'id');

        return view('user.edit', compact('user', 'rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'rol_id' => $request->rol_id,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.index')
            ->with('success', 'usuario actualizado con Exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->update([
            'state' => "Inactivo"
        ]);

        return redirect()->route('user.index')
            ->with('error', 'usuario inactivado con exito!');
    }
}
