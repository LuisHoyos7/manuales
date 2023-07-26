<?php

namespace App\Http\Controllers;

use App\Manual;
use App\Raiting;
use App\Category;
use App\Comment;
use App\Subcategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ManualController extends Controller
{
    public function index()
    {
        $manuals = Manual::all();

        return view('manuals.index', compact('manuals'));
    }

    public function create()
    {
        $category =  Category::pluck('name', 'id');
        $subcategory =  Subcategory::pluck('name', 'id');

        $manuals = Manual::all();

        return view('manuals.create', compact('manuals', 'category', 'subcategory'));
    }

    public function edit(Request $request, Manual $manual)
    {
        $category =  Category::pluck('name', 'id');
        $subcategory =  Subcategory::pluck('name', 'id');
        return view('manuals.edit', compact('manual', 'category', 'subcategory'));
    }

    public function update(Request $request, Manual $manual)
    {
        $manual->update($request->all());

        $request->session()->flash('manual.id', $manual->id);

        return redirect()->route('manuals.index')
            ->with('success', 'Manual actualizado con exito!');
    }

    public function destroy(Request $request, Manual $manual)
    {
        $manual->delete();

        return redirect()->route('manuals.index')
            ->with('error', 'Manual eliminado con exito!');
    }

    public function store(Request $request)
    {

        $manual = Manual::create($request->all());

        // Guardar la imagen en la carpeta pública
        $fileName = "";
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = $manual->id . '.' . $extension;
            $file->move(public_path(), $fileName);
        }

        // Resto del código de tu controlador
        $manual->state = "Activo";
        $manual->user_id = Auth::user()->id;
        $manual->url_file = $fileName;
        $manual->save();

        $request->session()->flash('manual.id', $manual->id);

        return redirect()->route('manuals.index')
            ->with('info', 'Manual creado con Exito!');
    }

    public function detail(Manual $manual)
    {
        $manual = $manual->with('user')->find($manual->id);

        $raiting = Raiting::where("manual_id", $manual->id)->where("user_id", Auth::user()->id)->first();

        $raitingGlobal = Raiting::where("manual_id", $manual->id)->avg('calification');

        $comments = Comment::where("manual_id", $manual->id)->get();

        return view('manuals.detail', compact('manual', 'comments', "raiting", "raitingGlobal"));
    }
}
