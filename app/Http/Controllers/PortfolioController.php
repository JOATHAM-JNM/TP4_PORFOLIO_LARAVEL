<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;

class PortfolioController extends Controller
{
    public function index()
    {
        $projets = Projet::all();
        return view('portfolio.index', compact('projets'));
    }
}
