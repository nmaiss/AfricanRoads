<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mean;

class HomeController extends Controller
{
    public function index(){
        $means = Mean::all();
        return view('home', compact('means'));
    }
}
