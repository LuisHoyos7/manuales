<?php

namespace App\Http\Controllers;

use App\Manual;
use App\Category;
use App\Subcategory;
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

    public function store(Request $request)
    {
        $manual = Manual::create($request->all());

        $request->session()->flash('manual.id', $manual->id);

        return redirect()->route('manuals.index')
            ->with('info', 'Manual creado con Exito!');
    }
}
