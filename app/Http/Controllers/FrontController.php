<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use App\Models\Category;

class FrontController extends Controller
{
    public function index()
    {
        return view('app.welcome');
    }

    public function about()
    {
        return view('app.about');
    }

    public function portofolio()
    {
        $portofolios = Portofolio::with('category')->latest()->get();
        return view('app.portofolio', ['portofolios' => $portofolios]);
    }

    public function portofolioDetail($id)
    {
        $portofolio = Portofolio::with('category')->findOrFail($id);
        return view('app.portofolioDetail', ['portofolio' => $portofolio]);
    }

    public function dummySave()
    {
        $portofolio = new Portofolio();
        $portofolio->title = "Portofolio";
        $portofolio->description = "Deskripsi portofolio";
        $portofolio->image = "padelfy%20(1).png";
        $portofolio->link = "link";
        $portofolio->save();
        dump($portofolio);
    }

    public function dummyUpdate($id)
    {
        $portofolio = Portofolio::find($id);
        if ($portofolio) {
            $portofolio->title = "Portofolio 1";
            $portofolio->save();
            dump($portofolio);
        } else return "Data not exist";
    }

    public function dummyDelete($id)
    {
        $portofolio = Portofolio::find($id);
        if ($portofolio) {
            $portofolio->delete();
            dump($portofolio);
        } else return "Data not exist";
    }
}
