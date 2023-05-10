<?php

namespace App\Http\Controllers;

use App\Subcategory;
use App\Category;
use App\Http\Requests\CourseStoreRequest;
use App\Http\Requests\CourseUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubcategoryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $subcategories = Subcategory::all();

        return view('subcategory.index', compact('subcategories'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $category =  Category::pluck('name', 'id');

        return view('subcategory.create', compact('category'));
    }

    /**
     * @param \App\Http\Requests\CourseStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseStoreRequest $request)
    {
        $subcategory = Subcategory::create($request->all());

        $request->session()->flash('subcategory.id', $subcategory->id);

        return redirect()->route('subcategory.index')
            ->with('info', 'Subcategoria creada con Exito!');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Course $course
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Subcategory $subcategory)
    {
        return view('subcategory.show', compact('subcategory'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Course $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Subcategory $subcategory)
    {
        $category =  Category::pluck('name', 'id');

        return view('subcategory.edit', compact('category', 'subcategory'));
    }

    /**
     * @param \App\Http\Requests\CourseUpdateRequest $request
     * @param \App\Course $course
     * @return \Illuminate\Http\Response
     */
    public function update(CourseUpdateRequest $request, Subcategory $subcategory)
    {
        $subcategory->update($request->all());

        $request->session()->flash('subcategory.id', $subcategory->id);

        return redirect()->route('subcategory.index')
            ->with('success', 'Subcategoria actualizado con Exito!');;
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Course $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Subcategory $subcategory)
    {
        $subcategory->delete();

        return redirect()->route('subcategory.index')
            ->with('error', 'Subcategoria eliminada con Exito!');
    }
}
