<?php

namespace App\Http\Controllers;

use App\User;
use App\Manual;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();

        $manuals = Manual::count();

        $categories = Category::count();

        $subcategories = SubCategory::count();

        return view('home', compact("users", "manuals", "categories", "subcategories"));
    }
}
