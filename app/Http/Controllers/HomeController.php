<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Portfolio;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $portfolios = Portfolio::all();
        
        return view('home', compact('services', 'portfolios'));
    }
}
