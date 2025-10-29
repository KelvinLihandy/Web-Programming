<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Models\Category;

class PortofolioController extends Controller
{
    public function index(){
        $portofolios = Portofolio::with('category')->latest()->paginate(10);
        return view('app.portofolios.index', ['portofolios' => $portofolios]);
    }

    public function create(){
        $categories = Category::all();
        return view('app.portofolios.create', ['categories' => $categories]);
    }

    public function store(Request $request){
        $request->validate([
            'category_id' => 'required | exists:categories,id',
            'title' => 'required | string | max:255',
            'description' => 'required'
        ]);
        Portofolio::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => 'img/Padelfy%20(1).png'
        ]);
        return redirect()->route('portofolio.index');
    }
}