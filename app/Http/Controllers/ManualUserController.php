<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManualUser;
use App\Manual;
use Illuminate\Support\Facades\Auth;

class ManualUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manual_user = ManualUser::join("manuals as m", "m.id", "=", "manuals_user.manual_id")
            ->where("manuals_user.user_id", Auth::user()->id)
            ->select("m.name", "m.description", "m.state", "manuals_user.id as id")
            ->get();

        return view("manual_user.index", compact("manual_user"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manual_user = ManualUser::create([
            "user_id" => Auth::user()->id,
            "manual_id" => $id
        ]);

        $manual = Manual::find($id);

        $manual->update(["is_favorite" => 1]);

        return redirect()->route('manuals.index')
            ->with('info', 'Manual agregado a favorito con exito!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manual_user = ManualUser::find($id);

        $manual = Manual::where("id", $manual_user->manual_id)->update([
            "is_favorite" => 0
        ]);

        $manual_user->delete();

        return redirect()->route('manual_user.index')
            ->with('error', 'Manual quitado de favorito con exito!');
    }
}
