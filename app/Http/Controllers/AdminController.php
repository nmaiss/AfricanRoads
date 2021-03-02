<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Mean;

class AdminController extends Controller
{
    public function index() {
        $countries = Country::all();
        $means = Mean::all();
        return view('/admin', compact('countries', 'means'));
    }
}
